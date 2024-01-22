//package com.web.store.register.controller;
//
//import org.slf4j.Logger;
//import org.slf4j.LoggerFactory;
//import org.springframework.stereotype.Controller;
//import org.springframework.ui.Model;
//import org.springframework.web.bind.annotation.GetMapping;
//import org.springframework.web.bind.annotation.PostMapping;
//import org.springframework.web.bind.annotation.RequestMapping;
//
//import com.web.store.register.model.registerBean;
//import com.web.store.register.service.regService;
//
//import jakarta.servlet.ServletContext;
//
//@Controller
//@RequestMapping("/register2")
//public class regController {
//	private static Logger log = LoggerFactory.getLogger(regController.class);
//	
//	String inputDataForm = "register2/register"; 
//	regService regservice;
//	
//	ServletContext servletContex;
//
//	public regController(regService regservice, ServletContext servletContex) {
//		this.regservice = regservice;
//		this.servletContex = servletContex;
//	}
//	@GetMapping("/register")
//	public String sendEmptyForm(Model model) {
//		registerBean member = new registerBean();
//		model.addAttribute("member", member);
//		
//		
//		return inputDataForm;
//	}
//	@PostMapping("/register")
//	public String processFormData(
//			
//			Model model
//			
//			) {
////		MemberValidator validator = new MemberValidator();
////		validator.validate(member, result);
////		if(result.hasErrors()) {
////			return inputDataForm;
////		}
////		
////		if(regservice.exsistByAccount(member.getAccount())) {
////			result.rejectValue("memberId", "", "帳號已存在，請重新輸入");
////			return inputDataForm;
////		}
////		member.setPassword(GlobalService.encodeBCryptPassword(member.getPassword()));
////		try {
////			regservice.save(member);
////			log.info("新增MemberBean成功：" + member);
////			ra.addFlashAttribute("SUCCESS", "會員: " + member.getAccount() +  "資料新增成功");
////		}catch(Exception ex){
////			System.out.println(ex.getClass().getName() + ", ex.getMessage()=" + ex.getMessage());
////			result.rejectValue("account", "", "發生異常，請通知系統人員..." + ex.getMessage());
////			return inputDataForm;
////		}
////		try {
////			regservice.save(member);
////			log.info("成功");
////		} catch (Exception e) {
////			System.out.println("SQL語句錯誤WHY?????");
////		}
////		registerBean rb = new registerBean();
////		String account = rb.getAccount();
////		String username = rb.getUsername();
////		String password = rb.getPassword();
////		String mail = rb.getMail();
////		String phone = rb.getPhone();
//		
//        // 呼叫Service層進行註冊
////        try {
////            memberService.registerMember(username, password);
////            model.addAttribute("successMessage", "註冊成功");
////        } catch (RegistrationException e) {
////            model.addAttribute("errorMessage", e.getMessage());
////        }
////		try {
////			regservice.insertMember(rb);
////            model.addAttribute("account", account);
////            model.addAttribute("username", username);
////            model.addAttribute("password", password);
////            model.addAttribute("mail", mail);
////            model.addAttribute("phone", phone);
////            System.out.println("成功");
////        } catch (Exception e) {
////            model.addAttribute("errorMessage", e.getMessage());
////            System.out.println("SQL語句錯誤WHY?????");
////        }
//		
//		return "redirect:/";
//		
//	}
//	
//}
