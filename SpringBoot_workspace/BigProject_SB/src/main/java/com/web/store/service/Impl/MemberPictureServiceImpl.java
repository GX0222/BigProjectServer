package com.web.store.service.Impl;

import java.util.Base64;

import org.springframework.lang.NonNull;
import org.springframework.stereotype.Service;

import com.web.store.dao.MemberPictureDao;
import com.web.store.model.MemberPictureBean;
import com.web.store.service.MemberPictureService;

@Service
public class MemberPictureServiceImpl implements MemberPictureService {

	MemberPictureDao memPicDao;

	public MemberPictureServiceImpl(MemberPictureDao memPicDao) {
		super();
		this.memPicDao = memPicDao;
	}

	@Override
	public MemberPictureBean findByMemberId(Integer memberId) {

		return memPicDao.findByMemberId(memberId);
	}

	@Override
	public String getImgByMemberId(Integer memberId) {
		MemberPictureBean memPicBeam;
		memPicBeam = findByMemberId(memberId);
		if(memPicBeam == null) {
			addNewBean(memberId);
		}
		if(memPicBeam.getPicture() != null) {
			byte[] MemPicByte = memPicBeam.getPicture();
            return Base64.getEncoder().encodeToString(MemPicByte);
		}
		return Base64.getEncoder().encodeToString(findByMemberId(2).getPicture());
	}

	@Override
	public void save(@NonNull MemberPictureBean mpb) {
		memPicDao.save(mpb);
		System.out.println("MemberPicture done");

	}

	@Override
	public void addNewBean(Integer memId) {
		MemberPictureBean mpb = new MemberPictureBean();
		mpb.setMemberId(memId);
		memPicDao.save(mpb);

	}

}
