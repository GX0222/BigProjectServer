package com.web.store.config;

import javax.sql.DataSource;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.messaging.simp.config.MessageBrokerRegistry;
import org.springframework.web.socket.config.annotation.EnableWebSocket;
import org.springframework.web.socket.config.annotation.EnableWebSocketMessageBroker;
import org.springframework.web.socket.config.annotation.StompEndpointRegistry;
import org.springframework.web.socket.config.annotation.WebSocketMessageBrokerConfigurer;

@Configuration
@EnableWebSocket
@EnableWebSocketMessageBroker
public class BigProjectConfig implements WebSocketMessageBrokerConfigurer {
	
	public BigProjectConfig() {
	}
	
    @Bean
    JdbcTemplate jdbcTemplate(DataSource dataSource) {
        return new JdbcTemplate(dataSource);
    }
    
    @Override
    public void configureMessageBroker(MessageBrokerRegistry registry) {
    	registry.enableSimpleBroker("/WSMessage");
    	registry.setApplicationDestinationPrefixes("/WSCommand");
    }

    @Override
    public void registerStompEndpoints(StompEndpointRegistry registry) {
        registry.addEndpoint("/WebSocket");
//        registry.addEndpoint("/WebSocket").withSockJS();
    }

}
