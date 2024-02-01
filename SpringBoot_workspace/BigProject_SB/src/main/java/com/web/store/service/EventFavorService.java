package com.web.store.service;

import java.util.List;

import com.web.store.model.EventFavorBean;

public interface EventFavorService {

	 //讓ServiceImpl實作的功能


	List<EventFavorBean> findAllByEventid(Integer eventid);

	List<EventFavorBean> findEventidByMemberid(Integer memberid);


	List<EventFavorBean> findAllByMemberidAndEventid(Integer memberid, Integer eventid);

	List<EventFavorBean> selectEvents(Integer memId);
	public void save(EventFavorBean eventid);
	public void update(EventFavorBean eventid);
	public EventFavorBean findByEventid(Integer eventid);
	public void delete(EventFavorBean eventFavor);
//	 EventsBean findByEventId(Integer eventId);

}
