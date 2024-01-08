package com.web.store.model;

import java.io.Serializable;
import java.sql.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.persistence.Transient;
@Entity
@Table(name="weather")
public class weather implements Serializable {
	private static final long serialVersionUID = 1L;
	@Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    @Column(name="seqNo")
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