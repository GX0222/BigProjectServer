package com.web.store.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class HomeController {

	@GetMapping("/")
	public String index(Model model) {
		return "index";
	}
//		System.out.println("in indwx(), MHW = " + model.getAttribute("string"));
//		System.out.println("in indwx(), MHWI = " + model.getAttribute("MHWI"));
//		System.out.println("in indwx(), MHW2 = " + model.getAttribute("MHW2"));
//		System.out.println("in indwx(), MHWI2 = " + model.getAttribute("MHWI2"));
//		System.out.println("in indwx(), MHW23 = " + model.getAttribute("MHW23"));

//	@ModelAttribute("MHW")
//	@ModelAttribute
//	public String m1() {
//		System.out.println("in m1()");
//		return "HaHa";
//	}
//
//	@ModelAttribute
//	public void m2(Model model) {
//		model.addAttribute("MHWI","OHHO");
//		model.addAttribute("MHW2","CC");
//	}

}
