package com.web.store.service;

import java.util.List;

import com.web.store.model.EventBean;

public interface EventService {
	public List<EventBean> findAll();
	
	public EventBean findTop1ByOrderByIdDesc();
	
	public List<EventBean> findTop2ByOrderByIdDesc();
	
	public List<EventBean> findTop2ByCountyOrderByIdDesc(String county);
}
