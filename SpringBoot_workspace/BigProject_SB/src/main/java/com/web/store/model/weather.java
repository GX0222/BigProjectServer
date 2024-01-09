package com.web.store.model;

import java.io.Serializable;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;
import jakarta.persistence.Transient;
@Entity
@Table(name="weather")
public class weather implements Serializable {
	private static final long serialVersionUID = 1L;
	@Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    @Column(name="id")
	Integer weatherId;
	@Transient
	String country;
	String dayLingtMaxT;
	String dayLingtMinT;
	String dayLingtState;
	String dayLingtStateVal;
	String dayLingtRain;
	String daynightMaxT;
	String daynightMinT;
	String daynightState;
	String daynightStateVal;
	String daynightRain;
	
	
}