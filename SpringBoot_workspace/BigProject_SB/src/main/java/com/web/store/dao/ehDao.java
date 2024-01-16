package com.web.store.dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;

import com.web.store.model.ehBean;

public interface ehDao extends JpaRepository<ehBean, Integer> {
	List<ehBean> findAll();
	
	List<ehBean> findAllByClassId(Integer classId);

	@Query("SELECT m FROM ehBean m WHERE m.event_id = :eventId")
	public List<ehBean> findByEvent_id(@Param("eventId")Integer id);
}