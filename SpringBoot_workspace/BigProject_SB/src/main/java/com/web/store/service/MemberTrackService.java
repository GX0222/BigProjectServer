package com.web.store.service;

import com.web.store.model.MemberTrackBean;

public interface MemberTrackService {
	public MemberTrackBean findByMemberId(Integer memId);
	
	public void addNewTrack(Integer memID);
	
	public void saveTrack(MemberTrackBean mtb);
}
