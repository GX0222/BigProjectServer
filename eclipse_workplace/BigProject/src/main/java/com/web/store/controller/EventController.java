package com.web.store.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class EventController {
	
	@GetMapping("/Event")
	public String event(Model model) {
		return "Event/Event";
	}
	
	@GetMapping("/Favor")
	public String favor(Model model) {
		return "Event/Favor";
	}
		
	@GetMapping("/List")
	public String list(Model model) {
		return "Event/List";
	}
	
}
