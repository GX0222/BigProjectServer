package com.web.store.dao;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.web.store.model.MemberTrackBean;

@Repository
public interface MemberTrackDao extends JpaRepository<MemberTrackBean, Integer> {
	MemberTrackBean findByMemberId(Integer memId);
}
