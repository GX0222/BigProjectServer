package com.web.store.controller;

import java.util.List;
import java.util.Map;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.ResponseBody;

import com.web.store.SmallTools.WeatherTool;
import com.web.store.dao.EventDaoJDBC;
import com.web.store.model.EventsBean;
import com.web.store.service.EventService;

@Controller
public class HomeController {

	EventService eventService;
	WeatherTool weatherTool;
	private static final Logger logger = LoggerFactory.getLogger(HomeController.class);


	public HomeController(EventService eventService, EventDaoJDBC ehDaoJDBC, WeatherTool weatherTool) {
		super();
		this.eventService = eventService;
		this.weatherTool = weatherTool;
	}



	@GetMapping("/")
	public String index(Model model) {
		List<EventsBean> eventLsit = eventService.findAll();
		List<EventsBean> eventTop2 = eventService.findTop2ByOrderByIdDesc();
		List<EventsBean> eventTop2Taipei = eventService.findTop2ByCountyOrderByIdDesc("台北市");
		String wtCounty = eventTop2.get(1).getCounty();

		model.addAttribute("eventList", eventLsit);
		model.addAttribute("eventTop2", eventTop2);
		model.addAttribute("Taipei", eventTop2Taipei);
		getWeatherData(model, wtCounty, "將軍區");
		List<String> countys = weatherTool.getAllCounty();
		model.addAttribute("countys", countys);
		return "index";
	}
	
	
	
	
	@PostMapping("/getTownByCounty")
    @ResponseBody
    public List<String> getTownByCounty(@RequestBody Map<String, String> req) {
		List<String> townList = weatherTool.getTownNameByCounty(req.get("CountyName"));
        return townList;
    }
	
	@PostMapping("/getWeatherByTown")
    @ResponseBody
    public Map<String, Object> getWeatherByTown(@RequestBody Map<String, String> req) {
		Map<String, Object> townWeather = weatherTool.getNowWeatherByTown(req.get("CountyName"), req.get("TownName"));
//		System.out.println("===================");
//		System.out.println("前端發來: "+req.get("CountyName").toString());
//		System.out.println(req.get("TownName").toString());
//		System.out.println("===================");
//		System.out.println(townWeather.get("AirTemperature").toString());
        return townWeather;
    }

	@ModelAttribute("weatherTemp")
	public void getWeatherData(Model model,String city, String town) {
		if(city == null || city.isEmpty()) {
			List<EventsBean> eventTop2 = eventService.findTop2ByOrderByIdDesc();
			city = eventTop2.get(1).getCounty();	
		}
		Map<String, Object> weatherData = weatherTool.getNowWeatherByTown(city, town);
		String temp = weatherData.get("AirTemperature").toString();
		String weather = weatherData.get("Weather").toString();
		String county = weatherData.get("CountyName").toString();
		String townn = weatherData.get("TownName").toString();
		model.addAttribute("temp1st", temp);
		model.addAttribute("weather1st", weather);
		model.addAttribute("county1st", county);
		model.addAttribute("town1st", townn);
	}
	
	
	@GetMapping("/AboutUs")
	public String aboutUs(Model model) {
		return "AboutUs/AboutUs";
	}

}
