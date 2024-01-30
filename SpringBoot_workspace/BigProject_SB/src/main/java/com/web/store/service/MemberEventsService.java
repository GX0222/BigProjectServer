package com.web.store.service;

import java.util.List;

import com.web.store.model.MemberEventsBean;

public interface MemberEventsService {
	List<MemberEventsBean> fidAll();
	List<MemberEventsBean> findByMemberId(Integer member_id);
	public void save(MemberEventsBean meb);
	public void delete(MemberEventsBean meb);
	public List<MemberEventsBean> findByEventsId(Integer eventsId);

}
