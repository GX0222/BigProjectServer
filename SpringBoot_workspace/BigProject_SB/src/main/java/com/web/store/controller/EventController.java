package com.web.store.controller;

import java.io.Console;
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
	public String event(@RequestParam(name = "eventId", required = false) Integer eventId, Model model, HttpSession session) {
	    // 如果 eventId 存在，則使用它查詢相應的事件資料
	   
		Integer eventID = (Integer) session.getAttribute("eventID");
		if (eventId != null) {
	        EventsBean eventData = eventService.findAllById(eventId);
	        model.addAttribute("eventData", eventData);
	    }
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
	public String eventlist(Model model, HttpSession session) {
		List<EventsBean> eventList = eventService.findAll();
		model.addAttribute("eventList", eventList);		
		
		return "Event/EventList";
	}
	
	@GetMapping("/EventList/{eventId}")
	public String viewEvent(@PathVariable Integer eventId, Model model, HttpSession session) {
	    // 根據 eventId 從服務中取得相應的活動資料
	    EventsBean eventData = eventService.findAllById(eventId);

	    // 將活動資料放入 model 中，以便在 JSP 中顯示
	    model.addAttribute("eventData", eventData);

	    // 這裡可以加入其他邏輯，例如檢查登入狀態等

	    return "redirect:/Event"; // 返回專屬活動頁面的名稱，例如 "EventDetails"
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
