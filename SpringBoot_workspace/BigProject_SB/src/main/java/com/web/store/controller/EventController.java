package com.web.store.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;

import com.web.store.model.EventsBean;
import com.web.store.service.EhService;
import com.web.store.service.EventService;

@Controller
public class EventController {
	
	EhService ehservice;
	@Autowired
    private EventService eventService;
	
	
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
	
	


	

}
