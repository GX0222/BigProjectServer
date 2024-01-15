package com.web.store;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.scheduling.annotation.EnableScheduling;

@SpringBootApplication
@EnableScheduling
public class BigProjectSbApplication {

	public static void main(String[] args) {
		SpringApplication.run(BigProjectSbApplication.class, args);
	}

}
