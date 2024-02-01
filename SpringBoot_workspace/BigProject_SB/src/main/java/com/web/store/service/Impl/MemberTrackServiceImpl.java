package com.web.store.service.Impl;

import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.lang.NonNull;
import org.springframework.stereotype.Service;

import com.web.store.dao.MemberTrackDao;
import com.web.store.model.MemberTrackBean;
import com.web.store.service.MemberTrackService;

@Service
public class MemberTrackServiceImpl implements MemberTrackService {

	@Autowired
	MemberTrackDao trackDao;

	public MemberTrackServiceImpl(MemberTrackDao trackDao) {
		super();
		this.trackDao = trackDao;
	}

	@Override
	public MemberTrackBean findByMemberId(Integer memId) {
		return trackDao.findByMemberId(memId);
	}

	@Override
	public void addNewTrack(Integer memID) {
		MemberTrackBean newTrackBean = new MemberTrackBean();
		newTrackBean.setMemberId(memID);
		newTrackBean.setHobby1lv(0);
		newTrackBean.setHobby2lv(0);
		newTrackBean.setHobby3lv(0);
		newTrackBean.setHobby4lv(0);
		newTrackBean.setHobby5lv(0);
		trackDao.save(newTrackBean);
	}

	@Override
	public void saveTrack(@NonNull MemberTrackBean mtb) {
		trackDao.save(mtb);
	}

	@Override
	public void runTrack(MemberTrackBean mtb, List<Integer> hobbys) {
		Map<Integer, Integer> hobbyLevels = new HashMap<>();
		hobbyLevels.put(1, mtb.getHobby1lv());
		hobbyLevels.put(2, mtb.getHobby2lv());
		hobbyLevels.put(3, mtb.getHobby3lv());
		hobbyLevels.put(4, mtb.getHobby4lv());
		hobbyLevels.put(5, mtb.getHobby5lv());

		for (Integer hobby : hobbys) {
			Integer oldLV = hobbyLevels.getOrDefault(hobby, 0);
			hobbyLevels.put(hobby, oldLV + 2);
		}

		mtb.setHobby1lv(hobbyLevels.getOrDefault(1, 0));
		mtb.setHobby2lv(hobbyLevels.getOrDefault(2, 0));
		mtb.setHobby3lv(hobbyLevels.getOrDefault(3, 0));
		mtb.setHobby4lv(hobbyLevels.getOrDefault(4, 0));
		mtb.setHobby5lv(hobbyLevels.getOrDefault(5, 0));

		saveTrack(mtb);
		System.out.println("追蹤成功");
	}

	@Override
	public Integer recommendEvents(MemberTrackBean mtb) {
		Map<Integer, Integer> hobbyLevels = new HashMap<>();
		hobbyLevels.put(1, mtb.getHobby1lv());
		hobbyLevels.put(2, mtb.getHobby2lv());
		hobbyLevels.put(3, mtb.getHobby3lv());
		hobbyLevels.put(4, mtb.getHobby4lv());
		hobbyLevels.put(5, mtb.getHobby5lv());
		int maxKeyValue = Integer.MIN_VALUE;
		int maxKey = -1;

		for (Map.Entry<Integer, Integer> entry : hobbyLevels.entrySet()) {
			if (entry.getValue() > maxKeyValue) {
				maxKeyValue = entry.getValue();
				maxKey = entry.getKey();
			}
		}

//		System.out.println(maxKeyValue);
		if (maxKeyValue > 10) {
			maxKeyValue--;
			switch (maxKey) {
			case 1:
				mtb.setHobby1lv(maxKeyValue);
				break;
			case 2:
				mtb.setHobby2lv(maxKeyValue);
				break;
			case 3:
				mtb.setHobby3lv(maxKeyValue);
				break;
			case 4:
				mtb.setHobby4lv(maxKeyValue);
				break;
			case 5:
				mtb.setHobby5lv(maxKeyValue);
				break;
			default:
				break;
			}
			trackDao.save(mtb);
		}
		return maxKey;

	}

}
