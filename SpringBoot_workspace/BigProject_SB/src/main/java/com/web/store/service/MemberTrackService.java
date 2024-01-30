package com.web.store.service;

import java.util.List;

import org.springframework.lang.NonNull;

import com.web.store.model.MemberTrackBean;

public interface MemberTrackService {
	public MemberTrackBean findByMemberId(Integer memId);
	
	public void addNewTrack(Integer memID);
	
	public void saveTrack(@NonNull MemberTrackBean mtb);
	
	public Integer recommendEvents(MemberTrackBean mtb);
	
	public void runTrack(MemberTrackBean mtb, List<Integer> hobbys);
}
