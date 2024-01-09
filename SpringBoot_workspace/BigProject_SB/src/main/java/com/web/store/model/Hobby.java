package com.web.store.model;

import java.io.Serializable;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;
@Entity
@Table(name="hobby")
public class Hobby implements Serializable {
	private static final long serialVersionUID = 1L;
	@Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id", unique = true, nullable = false)
    Integer hobbyId;
	String hobby;
	
	public Hobby(Integer hobbyId, String hobby) {
		
		this.hobbyId = hobbyId;
		this.hobby = hobby;
	}

	public Integer getHobbyId() {
		return hobbyId;
	}

	public void setHobbyId(Integer hobbyId) {
		this.hobbyId = hobbyId;
	}

	public String getHobby() {
		return hobby;
	}

	public void setHobby(String hobby) {
		this.hobby = hobby;
	}
	
	
	
}