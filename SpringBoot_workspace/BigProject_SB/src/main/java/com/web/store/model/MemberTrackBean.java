package com.web.store.model;

import java.io.Serializable;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

@Entity
@Table(name="member_track")
public class MemberTrackBean implements Serializable {
	private static final long serialVersionUID = 1L;
	@Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    @Column(name="id")
	Integer id;
	Integer memberId;
	Integer hobby1lv;
	Integer hobby2lv;
	Integer hobby3lv;
	Integer hobby4lv;
	Integer hobby5lv;

	public MemberTrackBean() {

	}

	public MemberTrackBean(Integer id, Integer memberId, Integer hobby1lv, Integer hobby2lv, Integer hobby3lv,
			Integer hobby4lv, Integer hobby5lv) {
		super();
		this.id = id;
		this.memberId = memberId;
		this.hobby1lv = hobby1lv;
		this.hobby2lv = hobby2lv;
		this.hobby3lv = hobby3lv;
		this.hobby4lv = hobby4lv;
		this.hobby5lv = hobby5lv;
	}

	public Integer getId() {
		return id;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public Integer getMemberId() {
		return memberId;
	}

	public void setMemberId(Integer memberId) {
		this.memberId = memberId;
	}

	public Integer getHobby1lv() {
		return hobby1lv;
	}

	public void setHobby1lv(Integer hobby1lv) {
		this.hobby1lv = hobby1lv;
	}

	public Integer getHobby2lv() {
		return hobby2lv;
	}

	public void setHobby2lv(Integer hobby2lv) {
		this.hobby2lv = hobby2lv;
	}

	public Integer getHobby3lv() {
		return hobby3lv;
	}

	public void setHobby3lv(Integer hobby3lv) {
		this.hobby3lv = hobby3lv;
	}

	public Integer getHobby4lv() {
		return hobby4lv;
	}

	public void setHobby4lv(Integer hobby4lv) {
		this.hobby4lv = hobby4lv;
	}

	public Integer getHobby5lv() {
		return hobby5lv;
	}

	public void setHobby5lv(Integer hobby5lv) {
		this.hobby5lv = hobby5lv;
	}

	public static long getSerialversionuid() {
		return serialVersionUID;
	}



}
