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
	@Override
	public void save(MemberEventsBean meb) {
		memberEventsDao.save(meb);
		System.out.println("memberEvents save done");
	}
	@Override
	public void delete(MemberEventsBean meb) {
		memberEventsDao.delete(meb);
		System.out.println("memberEvents delete done");
	}
	@Override
	public List<MemberEventsBean> findByEventsId(Integer eventsId) {

		return memberEventsDao.findByEventsId(eventsId);
	}



}
