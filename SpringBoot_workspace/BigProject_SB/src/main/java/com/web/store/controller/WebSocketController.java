package com.web.store.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.messaging.handler.annotation.MessageMapping;
import org.springframework.messaging.simp.SimpMessagingTemplate;
import org.springframework.messaging.simp.annotation.SubscribeMapping;
import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class WebSocketController {

	@Autowired
	private SimpMessagingTemplate messagingTemplate;

	@Scheduled(fixedRate = 6000) // 每分鐘觸發一次
	public void sendDataToClient() {
		String newData = "MHWMHWMHW";
		System.out.println("送送送");
		// 使用 WebSocket 向前端傳送新數據
		messagingTemplate.convertAndSend("/WSMessage/Mes", newData);
	}
	
	@MessageMapping("/WSMessage/Mes")
	public void handleSubscription(String message) {
	    // 在這裡處理接收到的消息
	    System.out.println("Received message: " + message);
	}

	// 或使用 @SubscribeMapping 註釋處理訂閱消息
	@SubscribeMapping("/WSMessage/Mes")
	public String handleSubscription() {
	    // 在這裡返回初始數據
	    return "subscribe";
	}

}
