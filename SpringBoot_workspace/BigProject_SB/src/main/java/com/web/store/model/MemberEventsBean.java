package com.web.store.model;

import java.io.Serializable;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

@Entity
@Table(name = "memberevents")
public class MemberEventsBean implements Serializable{
	private static final long serialVersionUID = 1L;
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	Integer member_events_id;
//	@Column(name = "member_id")
	Integer memberId;
//	@Column(name = "events_id")
	Integer eventsId;
	public MemberEventsBean() {}


	public MemberEventsBean(Integer member_events_id, Integer memberId, Integer eventsId) {
		this.member_events_id = member_events_id;
		this.memberId = memberId;
		this.eventsId = eventsId;
	}


	public Integer getMember_events_id() {
		return member_events_id;
	}
	public void setMember_events_id(Integer member_events_id) {
		this.member_events_id = member_events_id;
	}
	public Integer getMemberId() {
		return memberId;
	}
	public void setMemberId(Integer memberId) {
		this.memberId = memberId;
	}
	public Integer getEventsId() {
		return eventsId;
	}
	public void setEventsId(Integer eventsId) {
		this.eventsId = eventsId;
	}
	public static long getSerialversionuid() {
		return serialVersionUID;
	}





}
