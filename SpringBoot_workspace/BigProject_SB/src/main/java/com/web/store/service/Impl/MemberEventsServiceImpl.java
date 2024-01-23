package com.web.store.service.Impl;

import java.util.List;

import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.web.store.dao.MemberEventsDao;
import com.web.store.model.MemberEventsBean;
import com.web.store.service.MemberEventsService;
@Service
@Transactional
public class MemberEventsServiceImpl implements MemberEventsService {
	MemberEventsDao memberEventsDao;
	public MemberEventsServiceImpl(MemberEventsDao memberEventsDao) {
		super();
		this.memberEventsDao = memberEventsDao;
	}
	@Override
	public List<MemberEventsBean> fidAll() {
		
		return memberEventsDao.findAll();
	}
	@Override
	public List<MemberEventsBean> findByMemberId(Integer member_id) {
		
		return memberEventsDao.findByMemberId(member_id);
	}
//	@Override
//	public Integer getByEvent_id(Integer event_id) {
//		
//		return memberEventsDao.getByEvent_id(event_id);
//	}
	

}
