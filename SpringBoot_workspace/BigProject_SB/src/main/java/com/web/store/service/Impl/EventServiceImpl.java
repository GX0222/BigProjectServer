package com.web.store.service.Impl;

import java.util.List;

import org.springframework.stereotype.Service;

import com.web.store.dao.EventDao;
import com.web.store.model.EventBean;
import com.web.store.service.EventService;

@Service
public class EventServiceImpl implements EventService {

	EventDao eventDao;
	
	
	public EventServiceImpl(EventDao eventDao) {
		super();
		this.eventDao = eventDao;
	}


	@Override
	public List<EventBean> findAll() {
		
		return eventDao.findAll();
	}

}
