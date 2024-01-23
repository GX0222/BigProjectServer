package com.web.store.service.Impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.PageRequest;
import org.springframework.data.domain.Pageable;
import org.springframework.stereotype.Service;

import com.web.store.dao.EventDao;
import com.web.store.model.EventsBean;
import com.web.store.service.EventService;

@Service
public class EventServiceImpl implements EventService {

	@Autowired
    private EventDao eventDao;
	
	
	public EventServiceImpl(EventDao eventDao) {
		super();
		this.eventDao = eventDao;
	}


	@Override
	public List<EventsBean> findAll() {

		return eventDao.findAll();
	}


	@Override
	public EventsBean findTop1ByOrderByIdDesc() {

		return eventDao.findTop1ByOrderByIdDesc();
	}


	@Override
	public List<EventsBean> findTop2ByOrderByIdDesc() {

		return eventDao.findTop2ByOrderByIdDesc();
	}


	@Override
	public List<EventsBean> findTop2ByCountyOrderByIdDesc(String county) {

		return eventDao.findTop2ByCountyOrderByIdDesc(county);
	}

    @Override
    public List<EventsBean> getEventsByClassId(Integer classId) {
        return eventDao.getEventsByClassId(classId);
    }	


	@Override
	public EventsBean findAllById(Integer id) {

		return eventDao.findAllById(id);
	}
	
	@Override
    public Page<EventsBean> getEventsByCounty(String county, int pageNo, int pageSize) {
        // 使用分頁查詢方法
        return eventDao.findByCounty(county, PageRequest.of(pageNo, pageSize));
    }

	@Override
    public Page<EventsBean> getEventsByClassId(Integer classId, int pageNo, int pageSize) {
        return eventDao.getEventsByClassId(classId, PageRequest.of(pageNo, pageSize));
    }	

	
	@Override
	public EventsBean findById(Integer id) {
		
		return eventDao.findById(id);
	}
	
	@Override
	public void save(EventsBean eb) {
		eventDao.save(eb);
		System.out.println("event save done");
	}


	@Override
	public List<EventsBean> findByEventTitle(String eventTitle) {
		
		return eventDao.findByEventTitle(eventTitle);
	}
	 
}
