package com.web.store.service;

import com.web.store.model.MemberPictureBeam;

public interface MemberPictureService {
	public MemberPictureBeam findByMemberId(Integer memberId);
	
	public String getImgByMemberId(Integer memberId);
	public void save(MemberPictureBeam mpeb);
}
