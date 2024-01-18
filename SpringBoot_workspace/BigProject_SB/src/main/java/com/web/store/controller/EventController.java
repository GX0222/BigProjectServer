package com.web.store.controller;


import java.util.List;

import org.springframework.data.domain.Page;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestParam;

import com.github.pagehelper.PageInfo;
import com.web.store.model.EventsBean;
import com.web.store.service.EhService;
import com.web.store.service.EventService;

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
	public String eventlist(Model model) {		
		List<EventsBean> eventList = eventService.findAll();
	    model.addAttribute("eventList", eventList);	  
	    
		return "Event/EventList";
	}

		@GetMapping("/EventList/{county}")
		public String eventList(@PathVariable String county,
		                        @RequestParam(defaultValue = "0") int pageNo,
		                        @RequestParam(defaultValue = "10") int pageSize,
		                        Model model) {
	    // 使用服務層方法獲取分頁數據
	    Page<EventsBean> page = eventService.getEventsByCounty(county, pageNo, pageSize);

	    // 將分頁數據傳遞給前端
	    model.addAttribute("events", page.getContent());
	    model.addAttribute("currentPage", page.getNumber()); // 注意這裡修改
	    model.addAttribute("totalPages", page.getTotalPages());
	    model.addAttribute("page", page);


	    return "Event/EventList";
	}

	

}
