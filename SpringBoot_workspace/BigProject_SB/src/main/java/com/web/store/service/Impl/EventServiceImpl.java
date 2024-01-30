package com.web.store.service.Impl;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.PageImpl;
import org.springframework.data.domain.PageRequest;
import org.springframework.data.domain.Pageable;
import org.springframework.stereotype.Service;

import com.web.store.dao.EventDao;
import com.web.store.dao.ehDao;
import com.web.store.model.EventsBean;
import com.web.store.model.ehBean;
import com.web.store.service.EventService;

@Service
public class EventServiceImpl implements EventService {

	@Autowired
	private EventDao eventDao;
	private ehDao EhDao;
	
	public EventServiceImpl(EventDao eventDao ,ehDao EhDao) {
		super();
		this.eventDao = eventDao;
		this.EhDao = EhDao;
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
	public List<EventsBean> findTop5ByCountyOrderByIdDesc(String county) {

		return eventDao.findTop5ByCountyOrderByIdDesc(county);
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

		return eventDao.findById(id).get();
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

	@Override
	public void delete(EventsBean eb) {
		System.out.println("event delete done");
		eventDao.delete(eb);
	}

	@Override
	public Integer count() {
		return (int) eventDao.count();
	}

	@Override
	public Page<EventsBean> getEventPage(int pageNum, int pageSize) {
		Pageable pageable = PageRequest.of(pageNum - 1, pageSize);
        return eventDao.findAll(pageable);
	}

	@Override
	public List<EventsBean> findByCounty(String county) {
		
		return eventDao.findByCounty(county);
	}

	@Override
	public Page<EventsBean> getEventPageClass(int pageNum, int pageSize, String county) {
		Pageable pageable = PageRequest.of(pageNum - 1, pageSize);
        return eventDao.findByCounty(county, pageable);
	}

	@Override
	public Page<EventsBean> getEventPageHobby(int pageNum, int pageSize, Integer hobby) {
//		System.out.println("123");
		List<ehBean> myeh = EhDao.findByClassId(hobby);
//		System.out.println("111    "+  String.valueOf(myeh.size()) );
		List<EventsBean> events = new ArrayList<>();
		for (ehBean eh :myeh) {
			
			events.add(eventDao.findAllById(eh.getEventId()));
		}
//		Pageable pageable = PageRequest.of(pageNum - 1, pageSize);
		
		int start = (pageNum - 1) * pageSize;
	    int end = Math.min((start + pageSize), events.size());

	    Pageable pageable = PageRequest.of(pageNum - 1, pageSize);
	    List<EventsBean> eventsOnPage = events.subList(start, end);

	    return new PageImpl<>(eventsOnPage, pageable, events.size());

	}
	
	
	
	
	
	
	

}
