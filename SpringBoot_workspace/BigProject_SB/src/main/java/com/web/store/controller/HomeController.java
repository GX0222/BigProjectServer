package com.web.store.controller;

import java.util.List;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;

import com.web.store.SmallTools.WeatherTool;
import com.web.store.dao.EventDaoJDBC;
import com.web.store.model.EventsBean;
import com.web.store.service.EventService;

@Controller
public class HomeController {

	EventService eventService;
	WeatherTool weatherTool;
	private static final Logger logger = LoggerFactory.getLogger(HomeController.class);
	
//	EventDaoJDBC ehDao2;
//	JDBC
	EventDaoJDBC ehDaoJDBC;
	

	public HomeController(EventService eventService, EventDaoJDBC ehDaoJDBC, WeatherTool weatherTool) {
		super();
		this.eventService = eventService;
		this.weatherTool = weatherTool;
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
		getWeatherData(model, "臺南市", "將軍區");
//		getWeatherData(model, "屏東縣", "滿州鄉");
		return "index";
	}

	@ModelAttribute("weatherTemp")
	public void getWeatherData(Model model,String city, String town) {
		String Temp = weatherTool.getNowWeatherByTown(city, town).get("AirTemperature").toString();
		model.addAttribute("temp", Temp);
	}

//		System.out.println("in indwx(), MHW = " + model.getAttribute("string"));
//		System.out.println("in indwx(), MHWI = " + model.getAttribute("MHWI"));
//		System.out.println("in indwx(), MHW2 = " + model.getAttribute("MHW2"));
//		System.out.println("in indwx(), MHWI2 = " + model.getAttribute("MHWI2"));
//		System.out.println("in indwx(), MHW23 = " + model.getAttribute("MHW23"));

//
//	@ModelAttribute
//	public void m2(Model model) {
//		model.addAttribute("MHWI","OHHO");
//		model.addAttribute("MHW2","CC");
//	}

}
