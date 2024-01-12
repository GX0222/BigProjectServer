package com.web.store.service.Impl;

import java.util.List;

import com.web.store.dao.ehDao;
import com.web.store.model.ehBean;
import com.web.store.service.EhService;

public class EhServiceImpl implements EhService {

	ehDao ehdao;
	
	@Override
	public List<ehBean> findAll() {
		
		return ehdao.findAll();
	}

	@Override
	public List<ehBean> findAllByClassId(Integer classId) {
		
		return ehdao.findAllByClassId(classId);
	}

}
