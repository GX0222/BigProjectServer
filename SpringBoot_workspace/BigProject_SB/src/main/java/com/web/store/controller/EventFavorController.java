package com.web.store.controller;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.ResponseBody;

import com.web.store.model.EventFavorBean;
import com.web.store.model.EventsBean;
import com.web.store.model.MemberBean;
import com.web.store.service.EventFavorService;
import com.web.store.service.EventService;

import jakarta.servlet.http.HttpSession;

@Controller
public class EventFavorController {
	EventFavorService efs;
	EventService es;

	EventsBean eb = new EventsBean();
//	EventsBean eb;

	public EventFavorController(EventFavorService efs, EventService es) {
	this.efs = efs;
	this.es = es;

}
//	@PostMapping("/Member/Love")
//	public String showFavorites(
//			Model model,
//			HttpSession session,
//			@RequestBody Map<String, String> req) {
//		Integer eventID = Integer.parseInt(req.get("eventID").toString());
//		session.setAttribute("eventID", eventID);
//		return "Member/Love";
//
//	}
	@GetMapping("/Love")
	public String showFavorites(Model model, HttpSession session) {
		MemberBean mb = (MemberBean) session.getAttribute("member");

		Integer memId = mb.getMemberId();
		List<EventFavorBean> eventF = efs.selectEvents(memId);
		System.out.println("memId : "+memId);
		System.out.println(eventF);
		if (memId != null) {
			List<EventsBean> eventDataList = new ArrayList<>();

			for (EventFavorBean eventFF : eventF) {
				Integer eventId = eventFF.getEventid();
				EventsBean eventData = es.findAllById(eventId);
				eventDataList.add(eventData);

				System.out.println("2");
			}
//	        Integer eventID = (Integer) session.getAttribute("eventID");
//	        EventsBean eventDataList = es.findAllById(eventID);

			model.addAttribute("eventDataList", eventDataList);
			System.out.println("3");
			System.out.println(eventDataList);
		}
		System.out.println("4");
	    return "Member/Love";
	}


    @PostMapping("/Event")
    @ResponseBody
    public String addToFavorites(
    		Model model,
    		HttpSession session,
    		@RequestBody Map<String, String> req,
    		EventFavorBean eventFavor) {
    	MemberBean mb = (MemberBean) session.getAttribute("member");
    	Integer memId = mb.getMemberId();
//    	System.out.println(req.get("eventId"));
//    	List<EventFavorBean> eventF = efs.findAllByEventid(memId);

    	if(memId == 2) {
    		System.out.println("請先登入會員");
    		System.out.println(memId);
    	}else {
    	    try {

//    	    	EventFavorBean events = efs.findByEventid(eb.getId());
    	    	EventFavorBean efb = new EventFavorBean();
    	    	efb.setEventid(Integer.valueOf(req.get("eventId")));
    	    	efb.setMemberid(memId);
    	    	System.out.println(eb.getId());
    	    	efs.save(efb);
    	        System.out.println("save成功");

    	    } catch (Exception e) {
    	        // 在這裡處理保存操作的異常
    	        e.printStackTrace();
    	        System.out.println("保存操作出現異常: " + e.getMessage());
    	    }
    	}


        return "活動收藏成功";
    }

    @DeleteMapping("/Event")
    @ResponseBody
    public String deleteToFavorites(
    		Model model,
    		HttpSession session
    		,@RequestBody Map<String, String> req ) {
        // 檢查會員是否登入
    	MemberBean mb = (MemberBean) session.getAttribute("member");
    	Integer memId = mb.getMemberId();
        if (mb == null || memId == null || memId == 2) {
    		System.out.println("請先登入會員");
    		System.out.println(memId);
        }
        String eventIds =req.get("eventid");
        if(eventIds != null){
        	try {
        		EventFavorBean efb = new EventFavorBean();
        		System.out.println(efb);
        		efs.delete(efb);
			} catch (Exception e) {
				 e.printStackTrace();
	    	     System.out.println("刪除操作出現異常: " + e.getMessage());
			}
        }
        // 取消收藏邏輯...
        return "活動刪除成功";
    }


}
