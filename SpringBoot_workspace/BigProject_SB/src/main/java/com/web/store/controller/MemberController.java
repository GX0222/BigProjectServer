package com.web.store.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.web.store.model.MemberBean;

import jakarta.servlet.http.HttpSession;

@Controller
public class MemberController {

	@GetMapping("/Member")
	public String member(Model model,HttpSession session) {
		MemberBean mb;
		mb = (MemberBean) session.getAttribute("member");
		if(mb.equals(null)) {
			return "login/login";
		}
		System.out.println(mb.getUsername());
		return "Member/Member";
	}

	@GetMapping("/Love")
	public String love(Model model) {
		return "Member/Love";
	}

	@GetMapping("/Update")
	public String update(Model model) {
		return "Member/Update";
	}

	@GetMapping("/List")
	public String list(Model model) {
		return "Member/List";
	}

	@GetMapping("/Trafficimfor")
	public String trafficimfor(Model model) {
		return "trafficimfor";
	}

	@GetMapping("/Ian/index'")
	public String ianIndex(Model model) {
		return "index";
	}

}
