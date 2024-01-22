package com.web.store.register.controller;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

import com.web.store.config.BCrypt;
import com.web.store.model.MemberBean;
import com.web.store.register.service.RegisterService;
import com.web.store.register.validator.MemberValidator;

import jakarta.servlet.ServletContext;

@Controller
@RequestMapping("/register")
public class RegisterMemberController {
	
	private static Logger log = LoggerFactory.getLogger(RegisterMemberController.class);
	
//	String rootDirectory = GlobalService.IMAGE_FILE_FOLDER_MEMBER;
	String inputDataForm = "/register/register"; 
	
	RegisterService registerService;
	
	ServletContext servletContext;
	
	
	

	
	
//	@Autowired
	public RegisterMemberController(RegisterService registerService, ServletContext servletContext) {
		this.registerService = registerService;
		this.servletContext = servletContext;
	}

	@GetMapping("/register")
	public String sendingEmptyForm(
			Model model) {
		MemberBean member = new MemberBean();
		member.setAccount("");
		member.setUsername("");
		member.setPassword("");
		member.setPassword1("");
		member.setPhone("");
		member.setMail("");
//		member.setBirthday(null);
		model.addAttribute("members", member);
		
		System.out.println("1");
		return inputDataForm;
	}
//	@PostMapping("/register")
//	public String processFormData(
//			@ModelAttribute registerBean member,
//			BindingResult result, Model model,
//			RedirectAttributes ra
//		) {
//		MemberValidator validator = new MemberValidator();
//		validator.validate(member, result);
//		if (result.hasErrors()) {
////          下列敘述可以理解Spring MVC如何處理錯誤			
////			List<ObjectError> list = result.getAllErrors();
////			for (ObjectError error : list) {
////				System.out.println("有錯誤：" + error);
////			}
//			return inputDataForm;
//		}
////		MultipartFile multipartFile = member.getMultipartFile();
////		String originalFilename = multipartFile.getOriginalFilename();
////		
////		if (originalFilename.length() > 0 && originalFilename.lastIndexOf(".") > -1) {
////			member.setFileName(originalFilename);
////		}
//		
////		String ext = "";
////		if (originalFilename.lastIndexOf(".") > -1) {
////			ext = originalFilename.substring(originalFilename.lastIndexOf("."));
////		}
//		
//		// 建立Blob物件，交由 Hibernate 寫入資料庫
////		if (multipartFile != null && !multipartFile.isEmpty()) {
////			try {
////				byte[] b = multipartFile.getBytes();
////				member.setMemberImage(b);
////			} catch (Exception e) {
////				e.printStackTrace();
////				throw new RuntimeException("檔案上傳發生異常: " + e.getMessage());
////			}
////		}
////        String mimeType = servletContext.getMimeType(originalFilename); 
////        member.setMimeType(mimeType);
////		
//		// 檢查 account是否重複
//		if (registerService.existsByAccount(member.getAccount())) {
//			result.rejectValue("account", "", "帳號已存在，請重新輸入");
//			return inputDataForm;
//		}
//		
//		member.setPassword(GlobalService.encodeBCryptPassword(member.getPassword()));
//		try {
//			registerService.save(member);
//			log.info("新增MemberBean成功：" + member);
//			ra.addFlashAttribute("SUCCESS", "會員: " + member.getAccount() +  "資料新增成功");
//		} 
//		catch (Exception ex) {
//			System.out.println(ex.getClass().getName() + ", ex.getMessage()=" + ex.getMessage());
//			result.rejectValue("account", "", "發生異常，請通知系統人員..." + ex.getMessage());
//			return inputDataForm;
//		}
////		
////		try {
////			File imageFolder = new File(rootDirectory);
////			if (!imageFolder.exists())
////				imageFolder.mkdirs();
////			File file = new File(imageFolder, "MemberImage_" + member.getMemberId() + ext);
////			multipartFile.transferTo(file);
////		} catch (Exception e) {
////			e.printStackTrace();
////			throw new RuntimeException("檔案上傳發生異常: " + e.getMessage());
////		}
//		return "redirect:/";
//	}
	
	@PostMapping("/register")
	public String processFormData(
	        @ModelAttribute("members")  MemberBean member,
	        BindingResult result, Model model,
	        RedirectAttributes ra
	) {
		
	    MemberValidator validator = new MemberValidator();
	    validator.validate(member, result);
	    System.out.println("2");
	    registerService.isValidmailAddress(member.getMail());
	    System.out.println("3");
	    if (result.hasErrors()) {
	    	System.out.println("4");
	        return inputDataForm;
	    }

	    // 檢查帳號是否已存在
	    if (registerService.existsByAccount(member.getAccount())) {
	    	System.out.println("5");
	        result.rejectValue("account", "", "帳號已存在，請重新輸入");
	        System.out.println("6");
	        return inputDataForm;  // 請替換為實際的表單視圖名稱
	    }

	    // 將密碼進行 BCrypt 加密
//	    member.setPassword(GlobalService.encodeBCryptPassword(member.getPassword()))
	    // 將密碼進行 BCrypt 加密
	    log.info("開始加密");
	    String rawPassword = member.getPassword(); // 獲取原始密碼
	    log.info("獲取原始碼成功");
	    String salt = BCrypt.gensalt(); // 生成鹽
	    log.info("生成鹽成功");
	    String hashedPassword = BCrypt.hashpw(rawPassword, salt); // 使用BCrypt加密
	    log.info("BCrypt加密成功");
	    member.setPassword(hashedPassword); // 將加密後的密碼設置回MemberBean
	    member.setSalt(salt); // 設置鹽
	    System.out.println("7");

	    try {
	        // 保存註冊數據
	        registerService.save(member);
	        System.out.println("8");
	        log.info("新增MemberBean成功：" + member);
	        System.out.println("9");
	        ra.addFlashAttribute("SUCCESS", "會員: " + member.getAccount() +  "資料新增成功");
	        System.out.println("10");
	    } catch (Exception ex) {
	    	System.out.println("11");
	        System.out.println(ex.getClass().getName() + ", ex.getMessage()=" + ex.getMessage());
	        System.out.println("12");
	        result.rejectValue("account", "", "發生異常，請通知系統人員..." + ex.getMessage());
	        System.out.println("13");
	        return inputDataForm;  // 請替換為實際的表單視圖名稱
	    }
	    System.out.println("13");
	    
	    return "redirect:/login/login";
	}

	
//	@ModelAttribute
//	public registerBean prepareMemberBean() {
//		registerBean member = new registerBean();
//		Timestamp registerTime = new Timestamp(System.currentTimeMillis());
//		member.setRegisterTime(registerTime);
////		member.setUserType("M");
//		return member;
//	}
	
}
