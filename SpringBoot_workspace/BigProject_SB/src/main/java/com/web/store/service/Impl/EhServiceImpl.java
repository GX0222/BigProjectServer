package com.web.store.service.Impl;

import java.util.List;

import org.springframework.stereotype.Service;

import com.web.store.dao.ehDao;
import com.web.store.model.ehBean;
import com.web.store.service.EhService;
@Service
public class EhServiceImpl implements EhService{
	ehDao ehdao;
	
	public EhServiceImpl(ehDao ehdao) {
		super();
		this.ehdao = ehdao;
	}
	
	@Override
	public List<ehBean> findAll() {
		
		return ehdao.findAll();
	}

	@Override
	public List<ehBean> findAllByClassId(Integer classId) {
		
		return ehdao.findAllByClassId(classId);
	}

	@Override
	public List<ehBean> findByEvent_id(Integer id) {
		
		return ehdao.findByEvent_id(id);
	}

}
