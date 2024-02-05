package com.web.store.service.Impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.web.store.dao.MemberDao;
import com.web.store.model.MemberBean;
import com.web.store.service.MemberService;

@Service
public class MemberServiceImpl implements MemberService {

	@Autowired
	private MemberDao memberDao;


	public MemberServiceImpl(MemberDao memberDao) {
		super();
		this.memberDao = memberDao;
	}

	@Override
	public List<MemberBean> findAll() {

		return memberDao.findAll();
	}

	@Override
	public MemberBean findByAccount(String account) {

		return memberDao.findByAccount(account);
	}

	@Override
	public MemberBean update(MemberBean mb) {
		
		return memberDao.save(mb);
	}

	@Override
	public MemberBean findByMemberId(Integer memberID) {
		return memberDao.findByMemberId(memberID);
	}



}
