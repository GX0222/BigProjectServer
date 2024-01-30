package com.web.store.service.Impl;

import java.util.List;
import java.util.Optional;

import org.springframework.stereotype.Service;

import com.web.store.dao.EventFavorDao;
import com.web.store.model.EventFavorBean;
import com.web.store.service.EventFavorService;
@Service
public class EventFavorServiceImpl implements EventFavorService {


	EventFavorDao efd;

	public EventFavorServiceImpl(EventFavorDao efd) {
		this.efd = efd;
	}



	@Override
	public void delete(EventFavorBean eventid) {
		Optional<EventFavorBean> efb = efd.findById(eventid.getEventid());
		if(efb.isPresent() && efb.get().equals(eventid)) {
			efd.delete(eventid);
			System.out.println("刪除成功");
		}else{
			System.out.println("刪除失敗");
		}
	}

	@Override
	public void save(EventFavorBean eventid) {
		Optional<EventFavorBean> efb = efd.findById(eventid.getEventid());
		if(!efb.isPresent()) {
			efd.save(eventid);
			System.out.println("存取成功");
		}else {
			System.out.println("存取失敗");
		}
	}

	@Override
	public void update(EventFavorBean eventid) {


	}



	@Override
	public List<EventFavorBean> findAllByEventid(Integer eventid) {

		return efd.findAllByEventid(eventid);
	}



	@Override
	public List<EventFavorBean> findEventidByMemberid(Integer memberID) {

		return efd.findEventidByMemberid(memberID);
	}



	@Override
	public EventFavorBean findByEventid(Integer eventid) {

		return efd.findByEventid(eventid);
	}



	@Override
	public List<EventFavorBean> selectEvents(Integer memId) {
		return efd.selectEvents(memId);
	}



//	@Override
//	public EventsBean findByEventId(Integer eventId) {
//
//		return (EventsBean) efd.findByEventId(eventId);
//	}





}
