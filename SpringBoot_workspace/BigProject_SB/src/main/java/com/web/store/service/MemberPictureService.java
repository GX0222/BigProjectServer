package com.web.store.service;

import org.springframework.lang.NonNull;

import com.web.store.model.MemberPictureBean;

public interface MemberPictureService {
	public MemberPictureBean findByMemberId(Integer memberId);

	public String getImgByMemberId(Integer memberId);
	public String getSmallImgByMemberId(Integer memberId, Integer height, Integer width);

	public void save(@NonNull MemberPictureBean mpb);
	public void addNewBean(Integer memId);
}
