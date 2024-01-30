package com.web.store.controller;

import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.springframework.data.domain.Page;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestParam;

import com.web.store.model.EventsBean;
import com.web.store.model.MemberBean;
import com.web.store.model.MemberTrackBean;
import com.web.store.model.ehBean;
import com.web.store.service.EhService;
import com.web.store.service.EventService;
import com.web.store.service.MemberTrackService;

import jakarta.servlet.http.HttpSession;

@Controller
public class EventController {

	EhService ehservice;
	EventService eventService;
	MemberTrackService trackService;

	public EventController(EhService ehservice, EventService eventService, MemberTrackService trackService) {
		super();
		this.ehservice = ehservice;
		this.eventService = eventService;
		this.trackService = trackService;
	}

	@GetMapping("/Event")
	public String event(Model model, HttpSession session) {
		// 如果 eventId 存在，則使用它查詢相應的事件資料

		Integer eventID = (Integer) session.getAttribute("eventID");
		EventsBean eventData = eventService.findAllById(eventID);
		model.addAttribute("eventData", eventData);
		return "Event/Event";
	}

	@PostMapping("/SelectEvent")
	public String selectEvent(Model model, HttpSession session, @RequestBody Map<String, String> req) {
		Integer eventID = Integer.parseInt(req.get("eventID").toString());
		session.setAttribute("eventID", eventID);
		MemberBean mb = (MemberBean) session.getAttribute("member");
		if (mb != null && !mb.getAccount().equals("Guest")) {
			if (req.get("track").toString().equals("true")) {
				MemberTrackBean mtb = trackService.findByMemberId(mb.getMemberId());
				if (mtb == null) {
					trackService.addNewTrack(mb.getMemberId());
					mtb = trackService.findByMemberId(mb.getMemberId());
				}
				List<Integer> hobbys = ehservice.findClassIdByEventIdToIntList(eventID);
				trackService.runTrack(mtb, hobbys);
			}
		}
		return "redirect:/Event";
	}

	@GetMapping("/EventList")
	public String eventList(Model model, HttpSession session,
							@RequestParam(defaultValue = "1") int pageNum,
							@RequestParam(defaultValue = "10") int pageSize) {

		Page<EventsBean> eventPages = eventService.getEventPage(pageNum, pageSize);
		List<EventsBean> pageEvents = eventPages.getContent();

		model.addAttribute("eventList", pageEvents);
		model.addAttribute("totalPages", eventPages.getTotalPages());
		model.addAttribute("pageNum", eventPages.getNumber()+1);
		model.addAttribute("countEvents", eventPages.getTotalElements());

		return "Event/EventList";
	}

	@GetMapping("/ShowEventList")
	public String showEventList(Model model, HttpSession session,
								@RequestParam(defaultValue = "1") int pageNum,
								@RequestParam(defaultValue = "10") int pageSize) {

		Page<EventsBean> eventPages = eventService.getEventPage(pageNum, pageSize);
		List<EventsBean> pageEvents = eventPages.getContent();

		model.addAttribute("eventList", pageEvents);
		model.addAttribute("totalPages", eventPages.getTotalPages());
		model.addAttribute("pageNum", eventPages.getNumber()+1);
		model.addAttribute("countEvents", eventPages.getTotalElements());

		return "Event/ShowEventList";
	}

	@GetMapping("/GetEventClass")
//	@ResponseBody
	public String getEventClass(Model model, HttpSession session,
								@RequestParam HashMap<String, Object > countyB,
								@RequestParam(defaultValue = "1") int pageNum,
								@RequestParam(defaultValue = "10") int pageSize) {
//	public String getEventClass() {
//		System.out.println(countyB.get("listCounty"));
//		model.addAttribute("eventList", eventService.findByCounty("台北市"));
<<<<<<< HEAD
		System.out.println(countyB.get("eventClassType"));
//		System.out.println(countyB.get("eventClassContent"));
		
		Page<EventsBean> eventPages;
		List<EventsBean> pageEvents;
		
		String[] classC = {"台北市","新北市","桃園市","台中市","台南市","高雄市"};
		if(((String)countyB.get("eventClassType")).equals("h")) {
//			System.out.println("h in");
			if(((String)countyB.get("eventClassContent")).equals("a")) {
				eventPages = eventService.getEventPage(pageNum, pageSize);
				pageEvents = eventPages.getContent();
				model.addAttribute("eventList", pageEvents);
				model.addAttribute("totalPages", eventPages.getTotalPages());
				model.addAttribute("pageNum", eventPages.getNumber()+1);
				model.addAttribute("countEvents", eventPages.getTotalElements());
			}else {
//				System.out.println(Integer.valueOf((String)countyB.get("eventClassContent")));
				eventPages = eventService.getEventPageHobby(pageNum, pageSize,Integer.valueOf((String)countyB.get("eventClassContent")));
				pageEvents = eventPages.getContent();
				model.addAttribute("eventList", pageEvents);
				model.addAttribute("totalPages", eventPages.getTotalPages());
				model.addAttribute("pageNum", eventPages.getNumber()+1);
				model.addAttribute("countEvents", eventPages.getTotalElements());
			}
		}else if(((String)countyB.get("eventClassType")).equals("c")) {
//			System.out.println("c in");
//			System.out.println(classC[Integer.valueOf((String)countyB.get("eventClassContent"))]);
			eventPages = eventService.getEventPageClass(pageNum, pageSize, classC[Integer.valueOf((String)countyB.get("eventClassContent"))]);
			pageEvents = eventPages.getContent();
			model.addAttribute("eventList", pageEvents);
			model.addAttribute("totalPages", eventPages.getTotalPages());
			model.addAttribute("pageNum", eventPages.getNumber()+1);
			model.addAttribute("countEvents", eventPages.getTotalElements());
		}
		
		
=======

		Page<EventsBean> eventPages = eventService.getEventPageClass(pageNum, pageSize, (String)countyB.get("listCounty"));
		List<EventsBean> pageEvents = eventPages.getContent();

>>>>>>> 45e842841b28f9341ca9ec9487022c45504d375f
//		model.addAttribute("eventList", eventService.findByCounty((String)countyB.get("listCounty")));
		
		return "Event/ShowPage";

	}



}
