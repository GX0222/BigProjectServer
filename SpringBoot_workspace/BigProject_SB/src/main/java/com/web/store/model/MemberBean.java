package com.web.store.model;

import java.io.Serializable;
import java.sql.Date;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;
import jakarta.persistence.Transient;
@Entity
@Table(name="members")
public class MemberBean implements Serializable {
	private static final long serialVersionUID = 1L;
	@Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    @Column(name="id")
	Integer memberId;
	String account;
	String username;
	String password;
	String mail;
	String phone;
	Date birthday;
	Integer loginState;
	Integer loginDelayTime;
	Integer level;
	@Transient
	String password1;
	@Transient
	private String salt;


	public MemberBean(Integer memberId, String account, String username, String password, String mail, String phone,
			Date birthday, Integer loginState, Integer loginDelayTime, Integer level) {

		this.memberId = memberId;
		this.account = account;
		this.username = username;
		this.password = password;
		this.mail = mail;
		this.phone = phone;
		this.birthday = birthday;
		this.loginState = loginState;
		this.loginDelayTime = loginDelayTime;
		this.level = level;
	}
	public MemberBean() {

	}

	public Integer getMemberId() {
		return memberId;
	}

	public void setMemberId(Integer memberId) {
		this.memberId = memberId;
	}

	public String getAccount() {
		return account;
	}

	public void setAccount(String account) {
		this.account = account;
	}

	public String getUsername() {
		return username;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public String getMail() {
		return mail;
	}

	public void setMail(String mail) {
		this.mail = mail;
	}

	public String getPhone() {
		return phone;
	}

	public void setPhone(String phone) {
		this.phone = phone;
	}

	public Date getBirthday() {
		return birthday;
	}

	public void setBirthday(Date birthday) {
		this.birthday = birthday;
	}

	public Integer getLoginState() {
		return loginState;
	}

	public void setLoginState(Integer loginState) {
		this.loginState = loginState;
	}

	public Integer getLoginDelayTime() {
		return loginDelayTime;
	}

	public void setLoginDelayTime(Integer loginDelayTime) {
		this.loginDelayTime = loginDelayTime;
	}

	public Integer getLevel() {
		return level;
	}

	public void setLevel(Integer level) {
		this.level = level;
	}
	public String getPassword1() {
		return password1;
	}
	public void setPassword1(String password1) {
		this.password1 = password1;
	}
	public String getSalt() {
		return salt;
	}
	public void setSalt(String salt) {
		this.salt = salt;
	}
}
