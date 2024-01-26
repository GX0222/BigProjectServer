package com.web.store.controller;

import java.util.List;
import java.util.Map;

import org.springframework.data.domain.Page;
import org.springframework.http.HttpCookie;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestParam;

import com.web.store.model.EventsBean;
import com.web.store.model.MemberBean;
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
		Integer eventID = (Integer) session.getAttribute("eventID");
		EventsBean eventData = eventService.findAllById(eventID);
		model.addAttribute("eventData", eventData);
		return "Event/Event";
	}

	@PostMapping("/SelectEvent")
	public String selectEvent(Model model, HttpSession session, @RequestBody Map<String, String> req) {
		MemberBean mb = (MemberBean) session.getAttribute("member");
		if (mb != null && !mb.getAccount().equals("Guest")) {
			if (req.get("track").toString().equals("true")) {
				trackService.findByMemberId(mb.getMemberId());
			}
		}
		Integer eventID = Integer.parseInt(req.get("eventID").toString());
		session.setAttribute("eventID", eventID);
		return "redirect:/Event";
	}

	@PostMapping("/SelectEventForTrack")
	public String selectEventForTrack(Model model, HttpSession session, @RequestBody Map<String, String> req) {
		MemberBean mb = (MemberBean) session.getAttribute("member");
		if (mb != null && !mb.getAccount().equals("Guest")) {
			if (req.get("track").toString().equals("true")) {
				trackService.findByMemberId(mb.getMemberId());
			}
		}
		Integer eventID = Integer.parseInt(req.get("eventID").toString());
		session.setAttribute("eventID", eventID);
		return "redirect:/Event";
	}

	@GetMapping("/EventList")
	public String eventlist(Model model) {
		List<EventsBean> eventList = eventService.findAll();
		model.addAttribute("eventList", eventList);

		return "Event/EventList";
	}

	@GetMapping("/EventList/{county}")
	public String eventList(@PathVariable String county, @RequestParam(defaultValue = "0") int pageNo,
			@RequestParam(defaultValue = "10") int pageSize, Model model) {
		// 使用服務層方法獲取分頁數據
		Page<EventsBean> page = eventService.getEventsByCounty(county, pageNo, pageSize);

		// 將分頁數據傳遞給前端
		model.addAttribute("events", page.getContent());
		model.addAttribute("currentPage", page.getNumber());
		model.addAttribute("totalPages", page.getTotalPages());
		model.addAttribute("page", page);

		return "Event/EventList";
	}

	@GetMapping("/EventList/category/{classId}")
	public String eventListByClassId(@PathVariable Integer classId, @RequestParam(defaultValue = "0") int pageNo,
			@RequestParam(defaultValue = "10") int pageSize, Model model) {
		// 使用服務層方法獲取特定分類的分頁數據
		Page<EventsBean> page = eventService.getEventsByClassId(classId, pageNo, pageSize);

		// 將分頁數據傳遞給前端
		model.addAttribute("events", page.getContent());
		model.addAttribute("currentPage", page.getNumber());
		model.addAttribute("totalPages", page.getTotalPages());
		model.addAttribute("page", page);

		return "Event/EventList";
	}

}
