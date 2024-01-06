package com.web.store.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;

@Controller
public class HomeController {

	@GetMapping("/welcome")
	public String welcome(Model model) {
		model.addAttribute("title", "歡迎蒞臨君雅網路商城!!!");
		model.addAttribute("subtitle", "網路上獨一無二的購物天堂");
		return "welcome";
	}

	@GetMapping("/")
	public String index(Model model) {
		System.out.println("in indwx(), MHW = " + model.getAttribute("string"));
		System.out.println("in indwx(), MHWI = " + model.getAttribute("MHWI"));
		System.out.println("in indwx(), MHW2 = " + model.getAttribute("MHW2"));
		System.out.println("in indwx(), MHWI2 = " + model.getAttribute("MHWI2"));
		System.out.println("in indwx(), MHW23 = " + model.getAttribute("MHW23"));
		return "index";
	}

//	@ModelAttribute("MHW")
	@ModelAttribute
	public String m1() {
		System.out.println("in m1()");
		return "HaHa";
	}

	@ModelAttribute
	public void m2(Model model) {
		model.addAttribute("MHWI","OHHO");
		model.addAttribute("MHW2","CC");
	}

}
