package com.web.store.dao;

import java.util.List;
import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import com.web.store.model.EventFavorBean;

@Repository
public interface EventFavorDao extends JpaRepository<EventFavorBean, Integer> {

	EventFavorBean findByMemberid(Integer memberid);
<<<<<<< HEAD
	
	void delete(EventFavorBean eventFavor);
=======
>>>>>>> 4058e56610075682d5cd9f7f9c99134ba72e1f48

	@Override
	Optional<EventFavorBean> findById(Integer id);

	EventFavorBean findByEventid(Integer eventid);

	EventFavorBean getByEventid (Integer eventid);

	List<EventFavorBean>findAllByEventid(Integer eventid);

	List<EventFavorBean>findEventidByMemberid(Integer memberid);

	@Query(value="select * from memberfavor where memberid=:memId", nativeQuery = true)
	List<EventFavorBean> selectEvents(@Param("memId") Integer memId);

<<<<<<< HEAD
	List<EventFavorBean> findAllByMemberidAndEventid(Integer memberid, Integer eventid);
	
//	@Query(value="DELETE FROM memberfavor\r\n"
//			+ "WHERE memberid = :memId\r\n"
//			+ "  AND eventid = :eveId;", nativeQuery = true)
//	int deleteEvent(@Param("memId") Integer mid,@Param("eveId") Integer eid) ;

=======
>>>>>>> 4058e56610075682d5cd9f7f9c99134ba72e1f48
//	List<EventsBean> findByEventId(Integer eventid);

}
