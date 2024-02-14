package com.web.store.service;

import java.util.List;

import org.springframework.lang.NonNull;

import com.web.store.model.ChatRoomBean;

public interface ChatRoomService {
	public List<ChatRoomBean> findAll();
	
	public void save(@NonNull ChatRoomBean chb);
}
