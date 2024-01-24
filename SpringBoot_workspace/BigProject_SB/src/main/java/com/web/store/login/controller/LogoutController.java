package com.web.store.login.controller;


import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.SessionAttributes;
import org.springframework.web.bind.support.SessionStatus;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

import com.web.store.model.MemberBean;

import jakarta.servlet.http.HttpSession;

@Controller
@RequestMapping("/login")
@SessionAttributes({"LoginOK"})
public class LogoutController {
	private static Logger log = LoggerFactory.getLogger(LogoutController.class);
	
	@GetMapping("/logout")
	public String logout(
			HttpSession session, 
			Model model, 
			SessionStatus status,
			RedirectAttributes redirectAtt ) {
		String name = "";
		MemberBean member = (MemberBean) model.getAttribute("LoginOK");
		if(member !=null) {
			name = member.getUsername();
		}else {
			name = "Guest";
		}
		log.info(name + "已登出");
		// 登出時執行下列兩敘述
		status.setComplete(); 	// 移除@SessionAttributes({"LoginOK"}) 標示的屬性物件
		session.invalidate(); 	// 此敘述不能省略	
		
		return "redirect:/";	// 跳轉回http://localhost:80/
		
	}

}
