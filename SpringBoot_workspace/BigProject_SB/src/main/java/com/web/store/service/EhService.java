package com.web.store.service;

import java.util.List;

import com.web.store.model.ehBean;

public interface EhService {
	public List<ehBean> findAll();

	public List<ehBean> findAllByClassId(Integer classId);
	
	public List<ehBean> findByEvent_id(Integer id);
	public void save(ehBean ehb);
	public void delete(ehBean ehb);
	public List<ehBean> findClassIdByEventId(Integer eventId);
	public List<Integer> findClassIdByEventIdToIntList(Integer eventId);
}
