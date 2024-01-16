package com.web.store.dao;

import org.springframework.data.jpa.repository.JpaRepository;

import com.web.store.model.EventPageBean;
import com.web.store.model.EventsBean;

public interface EventPageDao extends JpaRepository<EventsBean, Integer>{
	EventPageBean findAllById(Integer id);
}
