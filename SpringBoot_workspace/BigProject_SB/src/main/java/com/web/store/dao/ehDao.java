package com.web.store.dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import com.web.store.model.ehBean;

@Repository
public interface ehDao extends JpaRepository<ehBean, Integer> {
	@SuppressWarnings("null")
	@Override
	List<ehBean> findAll();

	List<ehBean> findAllByClassId(Integer classId);

	@Query("SELECT m FROM ehBean m WHERE m.eventId = :eventId")
	public List<ehBean> findByEvent_id(@Param("eventId")Integer id);

	List<ehBean> findClassIdByEventId(Integer eventId);

	List<ehBean> findTop5ByClassIdOrderByEventIdDesc(Integer classId);
	
	public List<ehBean> findByClassId(Integer classId);
}