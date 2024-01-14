package com.web.store.service.Impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.web.store.dao.EventDao;
import com.web.store.model.EventsBean;
import com.web.store.service.EhService;
import com.web.store.service.EventService;

@Service
public class EventServiceImpl implements EventService {

	EventDao eventDao;
	
	
	public EventServiceImpl(EventDao eventDao) {
		super();
		this.eventDao = eventDao;
	}


	@Override
	public List<EventsBean> findAll() {
		
		return eventDao.findAll();
	}


	@Override
	public EventsBean findTop1ByOrderByIdDesc() {
		
		return eventDao.findTop1ByOrderByIdDesc();
	}


	@Override
	public List<EventsBean> findTop2ByOrderByIdDesc() {

		return eventDao.findTop2ByOrderByIdDesc();
	}


	@Override
	public List<EventsBean> findTop2ByCountyOrderByIdDesc(String county) {
			
		return eventDao.findTop2ByCountyOrderByIdDesc(county);
	}


	@Override
	public EventsBean findAllById(Integer id) {
		
		return eventDao.findAllById(id);
	}



	

}
