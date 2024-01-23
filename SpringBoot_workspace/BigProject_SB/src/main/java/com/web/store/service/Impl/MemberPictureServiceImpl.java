package com.web.store.service.Impl;

import java.util.Base64;

import org.springframework.stereotype.Service;

import com.web.store.dao.MemberPictureDao;
import com.web.store.model.MemberPictureBeam;
import com.web.store.service.MemberPictureService;

@Service
public class MemberPictureServiceImpl implements MemberPictureService {

	MemberPictureDao memPicDao;
	
	public MemberPictureServiceImpl(MemberPictureDao memPicDao) {
		super();
		this.memPicDao = memPicDao;
	}

	@Override
	public MemberPictureBeam findByMemberId(Integer memberId) {
		
		return memPicDao.findByMemberId(memberId);
	}

	@Override
	public String getImgByMemberId(Integer memberId) {
		MemberPictureBeam memPicBeam;
		memPicBeam = findByMemberId(memberId);
		byte[] MemPicByte = memPicBeam.getPicture();
		if(memPicBeam != null && MemPicByte != null) {
            return Base64.getEncoder().encodeToString(MemPicByte);
		}
		return Base64.getEncoder().encodeToString(findByMemberId(2).getPicture());
	}

}
