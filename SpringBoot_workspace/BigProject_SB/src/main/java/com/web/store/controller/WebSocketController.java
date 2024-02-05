package com.web.store.controller;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.messaging.handler.annotation.MessageMapping;
import org.springframework.messaging.handler.annotation.SendTo;
import org.springframework.messaging.simp.SimpMessagingTemplate;
import org.springframework.messaging.simp.annotation.SubscribeMapping;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.ResponseBody;

import com.web.store.model.MemberBean;
import com.web.store.service.MemberPictureService;
import com.web.store.service.MemberService;

import jakarta.servlet.http.HttpSession;

@Controller
public class WebSocketController {

	MemberPictureService memberPictureService;
	MemberService memberService;
	List<Map<String, String>> MesgList = new ArrayList<>();

	public WebSocketController(MemberPictureService memberPictureService, MemberService memberService) {
		super();
		this.memberPictureService = memberPictureService;
		this.memberService = memberService;
	}

	@Autowired
	private SimpMessagingTemplate messagingTemplate;

//	@Scheduled(fixedRate = 6000) // 每分鐘觸發一次
//	public void sendDataToClient() {
//		Map<String, String> mesgMap = new HashMap<>();
//		String newData = "MHWMHWMHWMHWMHWMHWMHWMHWMHWMHWMHWMHW";
//		Integer memID = 1;
//		String sendMemImg = memberPictureService.getImgByMemberId(memID);
//		MemberBean memBean = memberService.findByMemberId(memID);
//		String sendMemName = memBean.getUsername();
//		mesgMap.put("mesg", newData);
//		mesgMap.put("sendMemImg", sendMemImg);
//		mesgMap.put("sendMemName", sendMemName);
//		System.out.println("送送送");
//		messagingTemplate.convertAndSend("/WSMessage/Subscribe", mesgMap);
//	}
	
	@MessageMapping("/UserSendMesg")
	@SendTo("/WSMessage/Subscribe")
	public Map<String, String> handleSubscription(Map<String, String> message) {
	    System.out.println("收到訊息: " + message);
	    Map<String, String> mesgMap = new HashMap<>();
		String newData = message.get("Mesg");
		Integer memID = Integer.parseInt(message.get("MemID"));
		String sendMemImg = memberPictureService.getImgByMemberId(memID);
		if(sendMemImg == null || sendMemImg.isEmpty()) {
			sendMemImg = memberPictureService.getImgByMemberId(2);
		}
		MemberBean memBean = memberService.findByMemberId(memID);
		String sendMemName = memBean.getUsername();
		String sendMemAcc = memBean.getAccount();
		mesgMap.put("mesg", newData);
		mesgMap.put("sendMemImg", sendMemImg);
		mesgMap.put("sendMemName", sendMemName);
		mesgMap.put("sendMemID", memID.toString());
		mesgMap.put("sendMemAcc", sendMemAcc);
		MesgList.add(mesgMap);
		return mesgMap;
	}
	
	@PostMapping("/UpdateChat")
	@ResponseBody
	public List<Map<String, String>> updateChat(Model model, HttpSession session, @RequestBody Map<String, String> req) {
		return MesgList;
	}

	@SubscribeMapping("/Subscribe")
	public String handleSubscription() {
	    return "subscribe";
	}

}
