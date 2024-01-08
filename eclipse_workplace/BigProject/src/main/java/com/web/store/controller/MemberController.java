package com.web.store.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class MemberController {

	@GetMapping("/Member")
	public String member(Model model) {
		return "Member/Member";
	}

	@GetMapping("/Love")
	public String love(Model model) {
		return "Member/Love";
	}

	@GetMapping("/Activity_list")
	public String activity_list(Model model) {
		return "Member/Activity_list";
	}
	
//	@GetMapping("/trafficimfor/")
//	public String trafficimfor(Model model) {
//		return "trafficimfor";
//	}
}
