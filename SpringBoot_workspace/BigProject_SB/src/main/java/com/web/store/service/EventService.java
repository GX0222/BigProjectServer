package com.web.store.service;

import java.util.List;

import org.springframework.data.domain.Page;

import com.web.store.model.EventsBean;

public interface EventService {

	public List<EventsBean> findAll();

	public EventsBean findTop1ByOrderByIdDesc();

	public List<EventsBean> findTop2ByOrderByIdDesc();

	public List<EventsBean> findTop5ByCountyOrderByIdDesc(String county);

	public List<EventsBean> getEventsByClassId(Integer classId);

	public EventsBean findAllById(Integer id);

	Page<EventsBean> getEventsByCounty(String county, int pageNo, int pageSize);
	Page<EventsBean> getEventsByClassId(Integer classId, int pageNo, int pageSize);
	public EventsBean findById(Integer id);
	public List<EventsBean> findByEventTitle(String eventTitle);
	public void save(EventsBean eb);
	public void delete(EventsBean eb);

	public Integer count();

	public Page<EventsBean> getEventPage(int pageNum, int pageSize);

	public List<EventsBean> findByCounty(String county);
<<<<<<< HEAD
	
	public Page<EventsBean> getEventPageClass(int pageNum, int pageSize, String county); 
	public Page<EventsBean> getEventPageHobby(int pageNum, int pageSize, Integer hobby); 
	
=======

	public Page<EventsBean> getEventPageClass(int pageNum, int pageSize, String county);

>>>>>>> 45e842841b28f9341ca9ec9487022c45504d375f
	}
