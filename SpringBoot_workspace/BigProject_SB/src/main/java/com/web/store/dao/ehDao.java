package com.web.store.dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;

import com.web.store.model.EhBean;

public interface EhDao extends JpaRepository<EhBean, Integer> {
	@Query("SELECT m FROM EhBean m WHERE m.event_id = :eventId")
	public List<EhBean> findByEvent_id(@Param("eventId")Integer id);
}
