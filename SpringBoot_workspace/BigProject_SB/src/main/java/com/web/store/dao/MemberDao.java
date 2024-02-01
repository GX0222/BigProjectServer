package com.web.store.dao;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.web.store.model.MemberBean;

@Repository
public interface MemberDao extends JpaRepository<MemberBean, Integer> {

	MemberBean findByAccount(String account);

	MemberBean findByMemberId(Integer id);

<<<<<<< HEAD
	
=======
>>>>>>> 4058e56610075682d5cd9f7f9c99134ba72e1f48
}
