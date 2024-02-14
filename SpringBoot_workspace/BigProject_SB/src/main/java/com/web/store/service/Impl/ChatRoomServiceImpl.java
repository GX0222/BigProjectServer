package com.web.store.service.Impl;

import java.util.List;

import org.springframework.lang.NonNull;
import org.springframework.stereotype.Service;

import com.web.store.dao.ChatRoomDao;
import com.web.store.model.ChatRoomBean;
import com.web.store.service.ChatRoomService;

@Service
public class ChatRoomServiceImpl implements ChatRoomService {
	ChatRoomDao CRDao;

	public ChatRoomServiceImpl(ChatRoomDao cRDao) {
		super();
		CRDao = cRDao;
	}

	@Override
	public List<ChatRoomBean> findAll() {
		return CRDao.findAll();
	}

	@Override
	public void save(@NonNull ChatRoomBean chb) {
		CRDao.save(chb);
	}

}
