package com.web.store.dao;

import java.util.List;
import java.util.Optional;

import org.springframework.data.domain.Page;
import org.springframework.data.domain.Pageable;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.web.store.model.EventsBean;

@Repository
public interface EventDao extends JpaRepository<EventsBean, Integer> {
	EventsBean findTop1ByOrderByIdDesc();

	List<EventsBean> findTop2ByOrderByIdDesc();

	List<EventsBean> findTop2ByCountyOrderByIdDesc(String county);
	
	List<EventsBean> getEventsByClassId(Integer classId);

	EventsBean findAllById(Integer id);

	Page<EventsBean> findByCounty(String county, Pageable pageable);
	Page<EventsBean> getEventsByClassId(Integer classId, Pageable pageable);
    
	Optional<EventsBean> findById(Integer id);
	List<EventsBean> findByEventTitle(String eventTitle);

	
	
}
