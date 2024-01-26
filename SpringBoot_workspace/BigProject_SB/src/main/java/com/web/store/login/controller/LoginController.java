package com.web.store.login.controller;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.CookieValue;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.SessionAttributes;

import com.web.store.config.BCrypt;
import com.web.store.login.validator.LoginBeanValidator;
import com.web.store.model.LoginBean;
import com.web.store.model.MemberBean;
import com.web.store.model.MemberPictureBean;
import com.web.store.register.service.RegisterService;
import com.web.store.service.MemberPictureService;

import jakarta.servlet.http.Cookie;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import jakarta.servlet.http.HttpSession;

@Controller
@RequestMapping("/login")
@SessionAttributes({ "LoginOK", "aaa" })
public class LoginController {
	private static Logger log = LoggerFactory.getLogger(LoginController.class);

	String loginForm = "login/login";
	String loginOut = "login/logout";
//	@Autowired
//	MemberBean member;
	RegisterService registerService;
	MemberPictureService memPicSer;

	public LoginController(RegisterService registerService, MemberPictureService memPicSer) {
		super();
		this.registerService = registerService;
		this.memPicSer = memPicSer;
	}

	@GetMapping("/login")
	public String login00(HttpServletRequest request, Model model,
			@CookieValue(value = "user", required = false) String user,
			@CookieValue(value = "password", required = false) String password,
			@CookieValue(value = "rm", required = false) Boolean rm, HttpSession session) {
		MemberBean seMem = (MemberBean) session.getAttribute("member");
		String seMemAcc = seMem.getAccount().toString();

		if (seMemAcc.equals("Guest")) {
			user = "";
			password = "";
		} else {
			if (user == null) {
				user = "";
			}
			if (password == null) {
				password = "";
			}
		}
		if (rm != null) {
			rm = Boolean.valueOf(rm);
		} else {
			rm = false;
		}
		LoginBean bean = new LoginBean(user, password, rm);
		model.addAttribute(bean);
		System.out.println(bean);
		log.info("送出登入表單, userId=" + user);
		return loginForm;
	}

	@PostMapping("/login")
	public String checkAccount(@ModelAttribute("loginBean") LoginBean bean, BindingResult result, Model model,
			HttpServletRequest request, HttpServletResponse response) {
		LoginBeanValidator validator = new LoginBeanValidator();
		validator.validate(bean, result);
		if (result.hasErrors()) {
			return loginForm;
		}
		String password = bean.getPassword();
		MemberBean member = null;
		try {
			// 呼叫 loginService物件的 checkAccountPassword()，傳入account與password兩個參數
			member = registerService.findByAccountAndPassword(bean.getAccount(), password);
			if (member != null) {
				// OK, 登入成功, 將mb物件放入Session範圍內，識別字串為"LoginOK"
				model.addAttribute("LoginOK", member);
				log.info("登入成功，MemberBean=" + member);
			} else {
				// NG, 登入失敗, account與密碼的組合錯誤，放相關的錯誤訊息到 errorMsgMap 之內
				result.rejectValue("invalidCredentials", "", "該帳號不存在或密碼錯誤");
				log.info("登入失敗，userid=" + bean.getAccount() + ", 密碼=" + password);
				return loginForm;
			}
		} catch (RuntimeException ex) {
			result.rejectValue("invalidCredentials", "", ex.getMessage());
			ex.printStackTrace();
			return loginForm;
		}
		HttpSession session = request.getSession();

//		Map<String, String> memberData = new HashMap<>();
//		memberData.put("account",member.getAccount());
//		memberData.put("username",member.getUsername());
//		memberData.put("phone",member.getPhone());
//		memberData.put("birthday",member.getBirthday().toString());
//		memberData.put("birthday",member.getBirthday().toString());
		MemberBean memberData;
		memberData = registerService.findByAccount(bean.getAccount());
		session.setAttribute("member", memberData);

		String memImg = memPicSer.getImgByMemberId(memberData.getMemberId());
		session.setAttribute("memberImg", memImg);
		System.out.println(memberData);
//		System.out.println(member.getAccount());
		processCookies(bean, request, response);
		String nextPath = (String) session.getAttribute("requestURI");
		System.out.println("nextPath=" + nextPath);
		if (nextPath == null) {
//			nextPath = "/Member/Member";
//			nextPath = request.getContextPath();
		}
		return "redirect:/Member";
	}

	private void processCookies(LoginBean bean, HttpServletRequest request, HttpServletResponse response) {
		Cookie cookieUser = null;
		Cookie cookiePassword = null;
		Cookie cookieRememberMe = null;
		String account = bean.getAccount();
		String password = bean.getPassword();
		// rm存放瀏覽器送來之RememberMe的選項，如果使用者對RememberMe打勾，rm就不會是null
		if (bean.isRememberMe()) {

			cookieUser = new Cookie("account", account);
			cookieUser.setMaxAge(7 * 24 * 60 * 60); // Cookie的存活期: 七天
			cookieUser.setPath(request.getContextPath());

//			String salt = BCrypt.gensalt();
//			String encodePassword = BCrypt.hashpw(password, salt);
			cookiePassword = new Cookie("password", password);
			cookiePassword.setMaxAge(7 * 24 * 60 * 60);
			cookiePassword.setPath(request.getContextPath());
			System.out.println(cookieUser);
			cookieRememberMe = new Cookie("rm", "true");
			cookieRememberMe.setMaxAge(7 * 24 * 60 * 60);
			cookieRememberMe.setPath(request.getContextPath());

			System.out.println("cookieRemeberMe成功");
		} else { // 使用者沒有對 RememberMe 打勾
			cookieUser = new Cookie("user", account);
			cookieUser.setMaxAge(0); // MaxAge==0 表示要請瀏覽器刪除此Cookie
			cookieUser.setPath(request.getContextPath());

			String salt = BCrypt.gensalt();
			String encodePassword = BCrypt.hashpw(password, salt);
			cookiePassword = new Cookie("password", encodePassword);
			cookiePassword.setMaxAge(0);
			cookiePassword.setPath(request.getContextPath());

			cookieRememberMe = new Cookie("rm", "true");
			cookieRememberMe.setMaxAge(0);
			cookieRememberMe.setPath(request.getContextPath());
			System.out.println("沒有Rememberme");
		}
		response.addCookie(cookieUser);
		response.addCookie(cookiePassword);
		response.addCookie(cookieRememberMe);

	}
}
