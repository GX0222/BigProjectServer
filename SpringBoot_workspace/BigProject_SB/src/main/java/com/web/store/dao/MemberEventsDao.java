package com.web.store.dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;

import com.web.store.model.MemberEventsBean;

public interface MemberEventsDao extends JpaRepository<MemberEventsBean, Integer>{
	List<MemberEventsBean> findAll();
	@Query("SELECT m FROM MemberEventsBean m WHERE m.member_id = :memberId")
	List<MemberEventsBean> findByMemberId(@Param("memberId")Integer memberId);


}
