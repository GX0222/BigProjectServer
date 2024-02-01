package com.web.store.controller;

import java.util.ArrayList;
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
import com.web.store.model.EventsBean;
import com.web.store.model.MemberBean;
import com.web.store.model.MemberTrackBean;
import com.web.store.service.EhService;
import com.web.store.service.EventService;
import com.web.store.service.MemberPictureService;
import com.web.store.service.MemberService;
import com.web.store.service.MemberTrackService;

import jakarta.servlet.http.HttpSession;

@Controller
public class HomeController {

	EventService eventService;
	EhService ehService;
	MemberService memberService;
	MemberPictureService memberPictureService;
	MemberTrackService trackService;
	WeatherTool weatherTool;
	private static final Logger logger = LoggerFactory.getLogger(HomeController.class);

	public HomeController(EventService eventService, EhService ehService, MemberService memberService,
			MemberPictureService memberPictureService, MemberTrackService trackService, WeatherTool weatherTool) {
		super();
		this.eventService = eventService;
		this.ehService = ehService;
		this.memberService = memberService;
		this.memberPictureService = memberPictureService;
		this.trackService = trackService;
		this.weatherTool = weatherTool;
	}

	@GetMapping("/")
	public String index(Model model, HttpSession session) {
		List<EventsBean> eventLsit = eventService.findAll();
		List<EventsBean> eventTop2 = eventService.findTop2ByOrderByIdDesc();
		String wtCounty = eventTop2.get(1).getCounty();

		model.addAttribute("eventList", eventLsit);
		model.addAttribute("eventTop2", eventTop2);
		getWeatherData(model, wtCounty, "將軍區");
		List<String> countys = weatherTool.getAllCounty();
		model.addAttribute("countys", countys);

		if (checkLogin(model, session)) {
			System.out.println("有登入");
			MemberBean mb = (MemberBean) session.getAttribute("member");
			MemberTrackBean mtb = trackService.findByMemberId(mb.getMemberId());
			Integer recEveId = trackService.recommendEvents(mtb);
			if (recEveId == 0) {
				List<EventsBean> TaipeiTop5Eve = eventService.findTop5ByCountyOrderByIdDesc("台北市");
				model.addAttribute("smallNews", TaipeiTop5Eve);
			}else {
				List<Integer>top5EveId = ehService.findTop5ByEventidByClassIdToIntList(recEveId);
				List<EventsBean> top5Eve = new ArrayList<>();
				for(Integer eveId:top5EveId) {
					if(eveId != 0) {
						top5Eve.add(eventService.findById(eveId));
					}
				}
				model.addAttribute("smallNews", top5Eve);
			}
		}else {
			System.out.println("沒登入");
			List<EventsBean> TaipeiTop5Eve = eventService.findTop5ByCountyOrderByIdDesc("台北市");
			model.addAttribute("smallNews", TaipeiTop5Eve);
		}

		return "index";
	}

	@ModelAttribute
	public boolean checkLogin(Model model, HttpSession session) {
		MemberBean mb;
		mb = (MemberBean) session.getAttribute("member");
		String memImg = null;
		if (mb != null && !mb.getAccount().equals("Guest")) {
//			login
			Integer memID = mb.getMemberId();
			memImg = memberPictureService.getImgByMemberId(memID);
			if (memImg != null && !memImg.isEmpty()) {
				session.setAttribute("memberImg", memImg);
			} else {
				memImg = memberPictureService.getImgByMemberId(2);
				session.setAttribute("memberImg", memImg);
			}
			MemberTrackBean mtb = trackService.findByMemberId(mb.getMemberId());
			if (mtb == null) {
				trackService.addNewTrack(mb.getMemberId());
				mtb = trackService.findByMemberId(mb.getMemberId());
			}
			return true;
		} else {
//			guest
			mb = memberService.findByAccount("Guest");
			session.setAttribute("member", mb);
			memImg = memberPictureService.getImgByMemberId(2);
			session.setAttribute("memberImg", memImg);
			return false;
		}
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
		return townWeather;
	}

	@ModelAttribute("weatherTemp")
	public void getWeatherData(Model model, String city, String town) {
		if (city == null || city.isEmpty()) {
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

}
