package com.web.store.dao;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.web.store.model.EventBean;

@Repository
public interface EventDao extends JpaRepository<EventBean, Integer> {

}
