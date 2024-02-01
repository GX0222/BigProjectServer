package com.web.store.service;

import java.util.List;

import com.web.store.model.EventFavorBean;

public interface EventFavorService {

	 //讓ServiceImpl實作的功能



	List<EventFavorBean> findAllByEventid(Integer eventid);

	List<EventFavorBean> findEventidByMemberid(Integer memberid);

	void delete(EventFavorBean eventFavor);

	void save(EventFavorBean eventid);

	void update(EventFavorBean eventid);

	EventFavorBean findByEventid(Integer eventid);

	List<EventFavorBean> findAllByMemberidAndEventid(Integer memberid, Integer eventid);

	List<EventFavorBean> selectEvents(Integer memId);

//	 EventsBean findByEventId(Integer eventId);

}
