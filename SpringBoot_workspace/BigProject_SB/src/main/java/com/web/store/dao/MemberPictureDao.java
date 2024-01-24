package com.web.store.dao;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.web.store.model.MemberPictureBeam;

@Repository
public interface MemberPictureDao extends JpaRepository<MemberPictureBeam, Integer> {
	MemberPictureBeam findByMemberId(Integer memberId);
}
