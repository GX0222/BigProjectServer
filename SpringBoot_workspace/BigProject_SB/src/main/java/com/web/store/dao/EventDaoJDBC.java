package com.web.store.dao;

import java.util.List;

import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.stereotype.Repository;

import com.web.store.model.EventsBean;

@Repository
public class EventDaoJDBC {
	
	private final JdbcTemplate jdbcTemplate ;
	
	
	
	public EventDaoJDBC(JdbcTemplate jdbcTemplate) {
		super();
		this.jdbcTemplate = jdbcTemplate;
	}



	public List<EventsBean> findAll() {
		String sql = "SELECT * FROM events";
        // 使用 JdbcTemplate 執行 SQL 查詢
        return jdbcTemplate.query(sql, (resultSet, rowNum) -> {
            EventsBean eventsBean = new EventsBean();
            // 根據實際的 EventsBean 屬性來設定值
            eventsBean.setId(resultSet.getInt("id"));
            eventsBean.setEventTitle(resultSet.getString("event_title"));
            eventsBean.setEventInfo(resultSet.getString("event_info"));
            // 其他屬性的設定...
            return eventsBean;
        });
	}
}
