package com.web.store.service;

import java.util.List;

import com.web.store.model.EventsBean;

public interface EventService {
	public List<EventsBean> findAll();

	public EventsBean findTop1ByOrderByIdDesc();

	public List<EventsBean> findTop2ByOrderByIdDesc();

	public List<EventsBean> findTop2ByCountyOrderByIdDesc(String county);

	public EventsBean findAllById(Integer id);
}
