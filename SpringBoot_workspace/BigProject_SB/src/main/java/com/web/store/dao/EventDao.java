package com.web.store.dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.web.store.model.EventsBean;

@Repository
public interface EventDao extends JpaRepository<EventsBean, Integer> {
	EventsBean findTop1ByOrderByIdDesc();
	
	List<EventsBean> findTop2ByOrderByIdDesc();
	
	List<EventsBean> findTop2ByCountyOrderByIdDesc(String county);
	
	EventsBean findAllById(Integer id);
}
