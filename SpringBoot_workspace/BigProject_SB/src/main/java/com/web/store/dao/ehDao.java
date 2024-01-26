package com.web.store.dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;

import com.web.store.model.ehBean;

public interface ehDao extends JpaRepository<ehBean, Integer> {
	@Override
	List<ehBean> findAll();

	List<ehBean> findAllByClassId(Integer classId);

	@Query("SELECT m FROM ehBean m WHERE m.eventId = :eventId")
	public List<ehBean> findByEvent_id(@Param("eventId")Integer id);
	
	List<ehBean> findClassIdByEventId(Integer eventId);
}