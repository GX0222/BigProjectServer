package com.web.store.service;

import java.util.Date;
import java.util.List;

import com.web.store.model.MemberBean;

public interface MemberService {
	public List<MemberBean> findAll();

	public MemberBean findByAccount(String account);
	
	MemberBean update(MemberBean mb);
 }
