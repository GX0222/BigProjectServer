package com.web.store.dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.web.store.model.EventBean;

@Repository
public interface EventDao extends JpaRepository<EventBean, Integer> {
	EventBean findTop1ByOrderByIdDesc();
	
	List<EventBean> findTop2ByOrderByIdDesc();
	
	List<EventBean> findTop2ByCountyOrderByIdDesc(String county);
}
