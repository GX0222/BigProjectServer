package com.web.store.controller;

import java.util.HashMap;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.messaging.handler.annotation.MessageMapping;
import org.springframework.messaging.simp.SimpMessagingTemplate;
import org.springframework.messaging.simp.annotation.SubscribeMapping;
import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.web.bind.annotation.RestController;

import com.web.store.service.MemberPictureService;

@RestController
public class WebSocketController {

	MemberPictureService memberPictureService;
	
	public WebSocketController(MemberPictureService memberPictureService) {
		super();
		this.memberPictureService = memberPictureService;
	}

	@Autowired
	private SimpMessagingTemplate messagingTemplate;

	@Scheduled(fixedRate = 6000) // 每分鐘觸發一次
	public void sendDataToClient() {
		Map<String, String> mesgMap = new HashMap<>();
		String newData = "MHWMHWMHW";
		Integer memID = 1;
		String sendMemImg = memberPictureService.getImgByMemberId(memID);
		mesgMap.put("mesg", newData);
		mesgMap.put("sendMemImg", sendMemImg);
		System.out.println("送送送");
		// 使用 WebSocket 向前端傳送新數據
		messagingTemplate.convertAndSend("/WSMessage/Mes", mesgMap);
	}
	
	@MessageMapping("/WSMessage/Mes")
	public void handleSubscription(String message) {
	    System.out.println("Received message: " + message);
	}

	@SubscribeMapping("/WSMessage/Mes")
	public String handleSubscription() {
	    return "subscribe";
	}

}
