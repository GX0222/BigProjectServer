package com.web.store.service.Impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.web.store.dao.MemberTrackDao;
import com.web.store.model.MemberTrackBean;
import com.web.store.service.MemberTrackService;

import jakarta.persistence.criteria.CriteriaBuilder.Case;

@Service
public class MemberTrackServiceImpl implements MemberTrackService {
	
	@Autowired
	MemberTrackDao trackDao;

	public MemberTrackServiceImpl(MemberTrackDao trackDao) {
		super();
		this.trackDao = trackDao;
	}

	@Override
	public MemberTrackBean findByMemberId(Integer memId) {
		return trackDao.findByMemberId(memId);
	}
	
	public void addNewTrack(Integer memID) {
		MemberTrackBean newTrackBean = new MemberTrackBean();
		newTrackBean.setMemberId(memID);
		newTrackBean.setHobby1lv(0);
		newTrackBean.setHobby2lv(0);
		newTrackBean.setHobby3lv(0);
		newTrackBean.setHobby4lv(0);
		newTrackBean.setHobby5lv(0);
		trackDao.save(newTrackBean);
	}

	@Override
	public void saveTrack(MemberTrackBean mtb) {
		trackDao.save(mtb);
	}

}
