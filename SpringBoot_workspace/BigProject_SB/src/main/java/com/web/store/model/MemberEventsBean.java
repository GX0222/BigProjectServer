package com.web.store.model;

import java.io.Serializable;

import jakarta.persistence.Column;
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
	@Column(name = "member_id")
	Integer member_id;
//	@Column(name = "event_id")
	Integer events_id;
	public MemberEventsBean() {}
	public MemberEventsBean(Integer member_eventsId, Integer member_id, Integer event_id) {
		this.member_events_id = member_eventsId;
		this.member_id = member_id;
		this.events_id = event_id;
	}
	public Integer getMember_events_id() {
		return member_events_id;
	}
	public void setMember_events_id(Integer member_events_id) {
		this.member_events_id = member_events_id;
	}
	public Integer getMember_id() {
		return member_id;
	}
	public void setMember_id(Integer member_id) {
		this.member_id = member_id;
	}
	public Integer getEvent_id123() {
//		System.out.println(event_id);
//		System.out.println("路過");
		return events_id;
	}
	public void setEvent_id(Integer event_id) {
		this.events_id = event_id;
	}
	
	
	
	
}
