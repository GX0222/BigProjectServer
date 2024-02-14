package com.web.store.dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.web.store.model.ChatRoomBean;

@Repository
public interface ChatRoomDao extends JpaRepository<ChatRoomBean, Integer> {
	@SuppressWarnings("null")
	List<ChatRoomBean> findAll();
}
