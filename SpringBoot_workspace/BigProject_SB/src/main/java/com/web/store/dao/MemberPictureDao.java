package com.web.store.dao;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.web.store.model.MemberPictureBean;

@Repository
public interface MemberPictureDao extends JpaRepository<MemberPictureBean, Integer> {
	MemberPictureBean findByMemberId(Integer memberId);
	byte[] getPictureByMemberId(Integer memberId);
}
