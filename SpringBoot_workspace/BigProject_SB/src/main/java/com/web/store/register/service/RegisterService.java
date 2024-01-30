package com.web.store.register.service;

import com.web.store.model.MemberBean;
//@Service
public interface RegisterService {

	void save(MemberBean rb);


	MemberBean findByAccount(String account);


	MemberBean findByAccountAndPassword(String account, String password) ;


	boolean existsByAccount(String account);


	void hashPassword(MemberBean memberBean, String password);


	boolean isValidmailAddress(String mail);



}
