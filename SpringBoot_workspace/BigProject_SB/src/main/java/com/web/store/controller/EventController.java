package com.web.store.controller;

import java.util.ArrayList;
import java.util.List;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.web.store.model.EventsBean;
import com.web.store.service.EhService;
import com.web.store.service.EventService;

import jakarta.servlet.http.HttpServletRequest;

@Controller
public class EventController {

	EhService ehservice;
	EventService eventService;


	public EventController(EventService eventService) {
		super();
		this.eventService = eventService;
	}

	@GetMapping("/Event")
	public String event(Model model) {
		return "Event/Event";
	}

//	@SuppressWarnings("null")
//	@GetMapping("/EventList")
//	public String favor(Model model) {
//		List<ehBean> eventIds = ehservice.findAllByClassId(1);
////		List<Integer> ids = new ArrayList<>();
//		List<EventsBean> eventsByHobby = null;
//
//		for(ehBean eventId : eventIds) {
//			Integer id = eventId.getId();
//			eventsByHobby.add(eventService.findAllById(id)) ;
//		}
//
//		model.addAttribute("events", eventsByHobby);
//		return "Event/EventList";
//	}


	@GetMapping("/EventList")
	public String eventlist(Model model, HttpServletRequest request) {
		List<EventsBean> eventLsit = eventService.findAll();
		model.addAttribute("eventList", eventLsit);

		// 假設items是你的數據源
	    List<String> items = new ArrayList<>();
	    for (int i = 1; i <= 100; i++) {
	        items.add("Item " + i);
	    }
	    // 定義每頁顯示的記錄數
	    int recordsPerPage = 10;
	    // 獲取當前頁碼，默認為第1頁
	    int currentPage = (request.getParameter("page") != null) ? Integer.parseInt(request.getParameter("page")) : 1;

	    // 計算總頁數
	    int totalRecords = items.size();
	    int totalPages = (int) Math.ceil((double) totalRecords / recordsPerPage);

	    // 獲取當前頁的子列表
	    int startIndex = (currentPage - 1) * recordsPerPage;
	    int endIndex = Math.min(startIndex + recordsPerPage, totalRecords);
	    List<String> currentItems = items.subList(startIndex, endIndex);

	    // 將totalPages和currentPage添加到模型
	    model.addAttribute("totalPages", totalPages);
	    model.addAttribute("currentPage", currentPage);

		return "Event/EventList";
	}



}
