//package com.web.store.register.controller;
//
//import org.springframework.stereotype.Controller;
//import org.springframework.ui.Model;
//import org.springframework.validation.BindingResult;
//import org.springframework.web.bind.annotation.GetMapping;
//import org.springframework.web.bind.annotation.ModelAttribute;
//import org.springframework.web.bind.annotation.PostMapping;
//import org.springframework.web.bind.annotation.RequestMapping;
//
//import com.web.store.register.model.registerBean;
//import com.web.store.register.service.MemberService;
//import com.web.store.register.validator.MemberValidator;
//
//import jakarta.servlet.ServletContext;
//
//@Controller
//@RequestMapping("/register2")
//public class regMemberController {
//	ServletContext context;
//	
//	MemberService service;
//	
//	String inputDataForm = "/register2/register";
//
//	public regMemberController(ServletContext context, MemberService service) {
//		this.context = context;
//		this.service = service;
//	}
//	
//	@GetMapping("/register")
//	public String sendingEmptyForm(Model model) {
//		registerBean member = new registerBean();
//		member.setAccount("555");
//		member.setUsername("王大明");
//		member.setPassword("8888");
//		member.setPassword1("8888");
//		member.setPhone("0912-345678");
//		member.setMail("aa999@gmail.com");
//		member.setBirthday(null);
//		model.addAttribute("member", member);
//		
//		return inputDataForm;
//		
//	}
//	
//	@PostMapping("/register")
//	public String insertCustomerData(
//			@ModelAttribute("member") registerBean bean, 
//			BindingResult bindingResult
//			) {
//		new MemberValidator().validate(bean, bindingResult);
//		System.out.println("新增客戶: " + bean);
//
//		if (bindingResult.hasErrors()) {
////			System.out.println("======================");
////			List<ObjectError> list = bindingResult.getAllErrors();
////			for (ObjectError error : list) {
////				System.out.println("有錯誤：" + error);
////			}
////			System.out.println("======================");
//			return inputDataForm;
//		}
//		if (bean.getAccount() != null) {
//			service.update(bean);
//		}
//		
//		registerBean savedBean = service.save(bean);
//		return String.valueOf(savedBean.getAccount());
//	}
//	
//}
