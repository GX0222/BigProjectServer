package com.web.store.service;

import com.web.store.model.MemberPictureBean;

public interface MemberPictureService {
	public MemberPictureBean findByMemberId(Integer memberId);
	
	public String getImgByMemberId(Integer memberId);
	public void save(MemberPictureBeam mpeb);
}
