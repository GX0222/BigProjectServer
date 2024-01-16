package com.web.store.dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import com.web.store.model.ehBean;

public interface ehDao extends JpaRepository<ehBean, Integer> {
	@Override
	List<ehBean> findAll();

	List<ehBean> findAllByClassId(Integer classId);
}
