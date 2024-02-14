package com.web.store.model;

import java.io.Serializable;
import java.sql.Date;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

@Entity
@Table(name = "chat_room")
public class ChatRoomBean implements Serializable {
	private static final long serialVersionUID = 1L;
	@Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    @Column(name="id")
	Integer id;

	Integer eventId;
	Integer senderId;
	String mesg;
	String senderName;
	String senderAcc;
	Date sendTime;

	public ChatRoomBean() {
	}

	public ChatRoomBean(Integer id, Integer eventId, Integer senderId, String mesg, String senderName, String senderAcc,
			Date sendTime) {
		super();
		this.id = id;
		this.eventId = eventId;
		this.senderId = senderId;
		this.mesg = mesg;
		this.senderName = senderName;
		this.senderAcc = senderAcc;
		this.sendTime = sendTime;
	}

	public Integer getId() {
		return id;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public Integer getEventId() {
		return eventId;
	}

	public void setEventId(Integer eventId) {
		this.eventId = eventId;
	}

	public Integer getSenderId() {
		return senderId;
	}

	public void setSenderId(Integer senderId) {
		this.senderId = senderId;
	}

	public String getMesg() {
		return mesg;
	}

	public void setMesg(String mesg) {
		this.mesg = mesg;
	}

	public String getSenderName() {
		return senderName;
	}

	public void setSenderName(String senderName) {
		this.senderName = senderName;
	}

	public String getSenderAcc() {
		return senderAcc;
	}

	public void setSenderAcc(String senderAcc) {
		this.senderAcc = senderAcc;
	}

	public Date getSendTime() {
		return sendTime;
	}

	public void setSendTime(Date sendTime) {
		this.sendTime = sendTime;
	}

}
