package com.web.store.model;

import java.io.Serializable;
import java.sql.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
@Entity
@Table(name="member")
public class MemberBean implements Serializable {
	private static final long serialVersionUID = 1L;
	@Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    @Column(name="seqNo")
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

	
//	public MemberBean(Integer pkey, String memberId, String name, String password, String address, String email,
//			String tel, String userType, Timestamp registerTime, Double totalAmt, Double unpaid_amount,
//			Blob memberImage, String fileName) {
//		this.pkey = pkey;
//		this.memberId = memberId;
//		this.password = password;
//		this.name = name;
//		this.address = address;
//		this.email = email;
//		this.tel = tel;
//		this.userType = userType;
//		this.registerTime = registerTime;
//		this.totalAmt = totalAmt;
//		this.unpaid_amount = unpaid_amount;
//		this.fileName = fileName;
//		this.memberImage = memberImage;
//	}
//
//
//	public MemberBean() {
//	}
//
//	public Integer getPkey() {
//		return pkey;
//	}
//
//	public void setPkey(int pkey) {
//		this.pkey = pkey;
//	}
//
//	public Blob getMemberImage() {
//		return memberImage;
//	}
//
//	public void setMemberImage(Blob memberImage) {
//		this.memberImage = memberImage;
//	}
//
//	public Clob getComment() {
//		return comment;
//	}
//
//	public void setComment(Clob comment) {
//		this.comment = comment;
//	}
//
//	public String getFileName() {
//		return fileName;
//	}
//
//	public void setFileName(String fileName) {
//		this.fileName = fileName;
//	}
//
//	public void setUserType(String userType) {
//		this.userType = userType;
//	}
//
//	public void setTs(Timestamp ts) {
//		this.registerTime = ts;
//	}
//
//	public void setTotalAmt(Double totalAmt) {
//		this.totalAmt = totalAmt;
//	}
//
//	public String getAddress() {
//		return address;
//	}
//
//	public void setAddress(String address) {
//		this.address = address;
//	}
//
//	public String getEmail() {
//		return email;
//	}
//
//	public void setEmail(String mail) {
//		email = mail;
//	}
//
//	public void setRegisterTime(Timestamp registerTime) {
//		this.registerTime = registerTime;
//	}
//
//	public String getName() {
//		return name;
//	}
//
//	public void setName(String name) {
//		this.name = name;
//	}
//
//	public String getPassword() {
//		return password;
//	}
//
//	public void setPassword(String password) {
//		this.password = password;
//	}
//
//	public String getTel() {
//		return tel;
//	}
//
//	public void setTel(String tel) {
//		this.tel = tel;
//	}
//
//	public String getMemberId() {
//		return memberId;
//	}
//
//	public void setMemberId(String memberId) {
//		this.memberId = memberId;
//	}
//
//	@Override
//	public String toString() {
//		return "userid=" + memberId + "   password=" + password;
//	}
//
//	public String getUserType() {
//		return userType;
//	}
//
//	public Timestamp getRegisterTime() {
//		return registerTime;
//	}
//
//	public Double getTotalAmt() {
//		return totalAmt;
//	}
//
//	public Double getUnpaid_amount() {
//		return unpaid_amount;
//	}
//
//	public void setUnpaid_amount(Double unpaid_amount) {
//		this.unpaid_amount = unpaid_amount;
//	}
}
