package com.web.store.service;

import java.util.List;

import com.web.store.model.ehBean;

public interface EhService {
	public List<ehBean> findAll();
	
	public List<ehBean> findAllByClassId(Integer classId);
	
	public List<ehBean> findByEvent_id(Integer id);
}
