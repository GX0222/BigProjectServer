package com.web.store.controller;

import java.util.List;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.web.store.dao.EventDaoJDBC;
import com.web.store.model.EventsBean;
import com.web.store.service.EventService;

@Controller
public class HomeController {

	EventService eventService;
//	EventDaoJDBC ehDao2;
//	JDBC
	EventDaoJDBC ehDaoJDBC;

	

	public HomeController(EventService eventService, EventDaoJDBC ehDaoJDBC) {
		super();
		this.eventService = eventService;
//		JDBC
		this.ehDaoJDBC = ehDaoJDBC;
	}



	@GetMapping("/")
	public String index(Model model) {
		List<EventsBean> eventLsit = eventService.findAll();
		List<EventsBean> eventTop2 = eventService.findTop2ByOrderByIdDesc();
		List<EventsBean> eventTop2Taipei = eventService.findTop2ByCountyOrderByIdDesc("台北市");
//		JDBC
		List<EventsBean> eventssss = ehDaoJDBC.findAll();
		
		model.addAttribute("eventList", eventLsit);
		model.addAttribute("eventTop2", eventTop2);
		model.addAttribute("Taipei", eventTop2Taipei);
		model.addAttribute("eventssss", eventssss);
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
