package com.web.store.model;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;


@Entity
@Table(name="memberfavor")
public class EventFavorBean {
	private static final long serialVersionUID = 1L;
	@Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="id")
	Integer id;
	Integer memberid;
	Integer eventid;
	
	
	public EventFavorBean(Integer id, Integer memberid, Integer eventid) {
		super();
		this.id = id;
		this.memberid = memberid;
		this.eventid = eventid;
	}
	public EventFavorBean() {
		
	}
	
	public Integer getId() {
		return id;
	}
	public void setId(Integer id) {
		this.id = id;
	}
	public Integer getMemberid() {
		return memberid;
	}
	public void setMemberid(Integer memberid) {
		this.memberid = memberid;
	}
	public Integer getEventid() {
		return eventid;
	}
	public void setEventid(Integer eventid) {
		this.eventid = eventid;
	}
	public static long getSerialversionuid() {
		return serialVersionUID;
	}

	
	
	

	
	
	
}
