package com.web.store.service;

import java.util.List;
import java.util.Map;

import org.springframework.data.domain.Page;

import com.web.store.model.EventsBean;

public interface EventService {

	public List<EventsBean> findAll();

	public EventsBean findTop1ByOrderByIdDesc();

	public List<EventsBean> findTop2ByOrderByIdDesc();

	public List<EventsBean> findTop2ByCountyOrderByIdDesc(String county);
	
	public List<EventsBean> getEventsByClassId(Integer classId);

	public EventsBean findAllById(Integer id);

	Page<EventsBean> getEventsByCounty(String county, int pageNo, int pageSize);
	Page<EventsBean> getEventsByClassId(Integer classId, int pageNo, int pageSize);
    
	public EventsBean findById(Integer id);
	public List<EventsBean> findByEventTitle(String eventTitle);
	public void save(EventsBean eb);
	
	
	}
