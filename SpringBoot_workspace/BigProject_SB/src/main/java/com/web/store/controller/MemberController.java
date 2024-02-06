package com.web.store.controller;

import java.sql.Date;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Base64;
import java.util.HashMap;
import java.util.List;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import com.web.store.model.EventsBean;
import com.web.store.model.MemberBean;
import com.web.store.model.MemberEventsBean;
import com.web.store.model.MemberPictureBean;
import com.web.store.model.ehBean;
import com.web.store.service.EhService;
import com.web.store.service.EventService;
import com.web.store.service.MemberEventsService;
import com.web.store.service.MemberPictureService;
import com.web.store.service.MemberService;

import jakarta.servlet.http.HttpSession;



@Controller
public class MemberController {
	MemberEventsService memberEventsService;
	EventService eventService;
	EhService ehService;
	MemberPictureService memberPictureService;
	MemberService memberService;

	public MemberController(MemberEventsService memberEventsService, EventService eventService, EhService ehService,
			MemberPictureService memberPictureService, MemberService memberService) {
		super();
		this.memberEventsService = memberEventsService;
		this.eventService = eventService;
		this.ehService = ehService;
		this.memberPictureService = memberPictureService;
		this.memberService = memberService;
	}

	@GetMapping("/Member")
	public String member(Model model, HttpSession session) {
	MemberBean mb;
	mb = (MemberBean) session.getAttribute("member");
	if (mb == null || mb.getAccount().equals("Guest")) {
	return "redirect:/login/login";
	}
//	System.out.println(mb.getUsername());

	String memImg = memberPictureService.getImgByMemberId(mb.getMemberId());
	if (memImg == null || memImg.isEmpty()) {
		memImg = memberPictureService.getImgByMemberId(2);
	}
	session.setAttribute("memberImg", memImg);
//	System.out.println("GO member finished");
	return "Member/Member";
	}

//	@GetMapping("/Love")
//	public String love(Model model) {
//		return "Member/Love";
//	}

	@GetMapping("/Update")
	public String update(Model model, HttpSession session) {
		MemberBean mb;
		mb = (MemberBean) session.getAttribute("member");

		if (mb == null  || mb.getAccount().equals("Guest")) {
		return "redirect:/login/login";
		}
		return "Member/Update";
	}

	@GetMapping("/List")
	public String list(Model model, HttpSession session) {
		MemberBean mb;
//		System.out.println("1");
		mb = (MemberBean) session.getAttribute("member");
		if (mb == null || mb.getAccount().equals("Guest")) {
		return "redirect:/login/login";
		}

		List<MemberEventsBean> mm = memberEventsService.findByMemberId(mb.getMemberId());
		//在memberEvent表格裡面尋找會員有幾個活動
		model.addAttribute("table_size",mm.size());
//		List<String> aa1=new ArrayList<>();
//		List<String> aa2=new ArrayList<>();
//		List<String> aa3=new ArrayList<>();
//		List<String> aa4=new ArrayList<>();
//		List<Integer> aa5=new ArrayList<>();
//		for(MemberEventsBean mbean:mm) {
//			Integer idd = mbean.getEvent_id123();
//			System.out.println(idd);
////			EventsBean eb =eventService.getById(idd);
//			EventsBean eb =eventService.findById(idd);
//			aa1.add(eb.getEventTitle());
//			aa2.add(eb.getEventTime().replace(" ", "").replace("-","."));
//			aa3.add(eb.getLocation());
//			aa4.add(eb.getEventIntro());
//			aa5.add(eb.getId());
//		}
//
//		model.addAttribute("Event_title",aa1);
//		model.addAttribute("EventTime",aa2);
//		model.addAttribute("Location",aa3);
//		model.addAttribute("EventIntro",aa4);
//		model.addAttribute("EventId",aa5);
		return "Member/List";
	}

	@GetMapping("/Trafficimfor")
	public String trafficimfor(Model model) {
		return "trafficimfor/trafficimfor";
	}

	@GetMapping("/AboutUs")
	public String aboutUs(Model model) {
		return "AboutUs/AboutUs";
	}

	@GetMapping("/Ian/index'")
	public String ianIndex(Model model) {
		return "index";
	}


	@GetMapping("/Eedit")
	public String edit(Model model, HttpSession session) {
		MemberBean mb;
		mb = (MemberBean) session.getAttribute("member");
//		System.out.println(mb.getAccount());
		if (mb == null || mb.getAccount().equals("Guest")) {
		return "redirect:/login/login";
		}
		return "Member/Edit";
	}

	

	@GetMapping("/eventlist/item/{id}")
	@ResponseBody
//	public EventsBean eventlist(Model model,@PathVariable Integer id) {
	public List<Object> eventlist(Model model,@PathVariable Integer id) {
//		,@RequestParam Integer Id
//		System.out.println(Id);
		List<Object> out = new ArrayList<>();
		EventsBean eb = eventService.findById(id);
		List<ehBean> ehb = ehService.findByEvent_id(id);

//		for(ehBean a:ehb) {
//			System.out.println(a.getClassId());
//		}
		
//		Object[] out= {eb,ehb};
		out.add(eb);
		out.add(ehb);
		return out;
	}


	@GetMapping("/List/item")
	@ResponseBody
//	public List<EventsBean> Listevent(Model model, HttpSession session) {
	public List<Object> Listevent(Model model, HttpSession session) {
		MemberBean mb;
		mb = (MemberBean) session.getAttribute("member");
	List<MemberEventsBean> mm = memberEventsService.findByMemberId(mb.getMemberId());
	List<Object> out = new ArrayList<>();
	List<EventsBean> ebs = new ArrayList<>();
	List<String> imgstr = new ArrayList<>();
	model.addAttribute("table_size",mm.size());
	for(MemberEventsBean mbean:mm) {
		Integer idd = mbean.getEventsId();
//		System.out.println(idd);
		EventsBean eb =eventService.findById(idd);
		ebs.add(eb);
		if (eb.getEventImage() == null) {
			eb =eventService.findById(4);
			imgstr.add("data:image/png;base64, "+Base64.getEncoder().encodeToString(eb.getEventImage()));
		}else {
			imgstr.add("data:image/png;base64, "+Base64.getEncoder().encodeToString(eb.getEventImage()));
		}
//		imgstr.add("123");

	}
	out.add(ebs);
	out.add(imgstr);

	return out;
	}



	@PostMapping("/getJson")
    @ResponseBody
    public String JsonController(@RequestParam("id") String id, @RequestParam("name") String name) {
//        System.out.println(id+"===="+name);
        return "success";}

	@PostMapping("/getJson2")
    @ResponseBody
    public  HashMap<String, String> JsonController2(@RequestParam("eventId") String id, @RequestParam("eventName") String name,
    		@RequestParam("eventInfo") String id2,@RequestParam("eventIntro") String id3,@RequestParam("eventDate") String id4) {
        System.out.println(id+"===="+name+"===="+id2+"===="+id3+"===="+id4);
        System.out.println(name.length());
        EventsBean eb =eventService.findById(Integer.valueOf(id));
        eb.setEventTitle(name);
        eb.setEventInfo(id2);
        eb.setEventIntro(id3);
        eb.setEventTime(id4);
        eventService.save(eb);
        HashMap<String, String> a = new HashMap<>();
        a.put("stu", "success");
//        EventsBean updateEb = new EventsBean();
//        updateEb.set
//        eventService.save(updateEb);
//        return "success";
        return a;
        }

	@PostMapping("/getJson3")
    @ResponseBody
    public  HashMap<String, String> JsonController3(@RequestParam HashMap<String,Object> eb) {
//       System.out.println();
		int hobby_num =5;

		System.out.println(eb.get("eventId"));
		System.out.println(eb.get("eventDate"));
		System.out.println(eb.get("eventName"));
		System.out.println(eb.get("eventIntro"));
		System.out.println(eb.get("eventInfo"));
		System.out.println(eb.get("hb1"));
		System.out.println(eb.get("hb2"));
		System.out.println(eb.get("hb3"));
		System.out.println(eb.get("hb4"));
		System.out.println(eb.get("hb5"));
		System.out.println(eb.keySet().contains("data"));
//		System.out.println((eb.get("hb4")).getClass().getSimpleName());
		System.out.println(Boolean.valueOf((String)(eb.get("hb4"))));
		System.out.println(Boolean.valueOf("true"));
        EventsBean updateEb =eventService.findById(Integer.valueOf((String)eb.get("eventId")));
        updateEb.setEventTitle((String)eb.get("eventName"));
        updateEb.setEventInfo((String)eb.get("eventInfo"));
        updateEb.setEventIntro((String)eb.get("eventIntro"));
        updateEb.setEventTime((String)eb.get("eventDate"));

        updateEb.setCounty((String)eb.get("eventCity"));
        updateEb.setEventUrl((String)eb.get("eventUrl"));
        updateEb.setLocation((String)eb.get("eventLocation"));
        SimpleDateFormat sdf2 = new SimpleDateFormat("yyyy-MM-dd");
        String Stime = ((String)eb.get("eventDate")).contains(":")?((String)eb.get("eventDate")).split("~")[0].split(" ")[0]:((String)eb.get("eventDate")).replace(" ","").split("~")[0];
        String Etime = ((String)eb.get("eventDate")).contains(":")?((String)eb.get("eventDate")).split("~")[((String)eb.get("eventDate")).split("~").length-1]: ((String)eb.get("eventDate")).replace(" ","").split("~")[((String)eb.get("eventDate")).replace(" ","").split("~").length-1];
        try {
			Date StartTimeSql= new Date(sdf2.parse(Stime.replace("/","-").replace("_","-")).getTime());
			System.out.println(sdf2.parse(Stime.replace("/","-").replace("_","-")));

			Date EndTimeSql= new Date(sdf2.parse(Etime.replace("/","-").replace("_","-")).getTime());
			updateEb.setStartTime(StartTimeSql);
			updateEb.setEndTime(EndTimeSql);
		} catch (ParseException e) {
			System.out.println(e);
			e.printStackTrace();
		}

//        today time
		java.util.Date date = new java.util.Date();

		Date dateSQL = new Date(date.getTime());

        updateEb.setUpdateTime(dateSQL);
        if(eb.keySet().contains("data")) {
//        	System.out.println("圖片有修改");
        	updateEb.setEventImage(Base64.getDecoder().decode((eb.get("data").toString()).split(",")[1]));
        }
        eventService.save(updateEb);
        List<ehBean> ehb = ehService.findByEvent_id(Integer.valueOf((String)eb.get("eventId")));
//        List<Integer> ehobbies=new ArrayList<>();
//        System.out.println(ehobbies.isEmpty());

        for(ehBean a:ehb) {
			System.out.println(a.getClassId());
//			ehobbies.add(a.getClassId());
			ehService.delete(a);

		}

		int check_hobby_exist = 0;
        for(Integer i=0 ;i<hobby_num;i++) {
        	System.out.println("here1");
        	String hb ="hb"+String.valueOf(i+1);
        	System.out.println(hb);
        	System.out.println(Boolean.valueOf((String)(eb.get(hb))));
        	if(Boolean.valueOf((String)(eb.get(hb)))) {
        		ehBean updateEh = new ehBean();
        		updateEh.setEventId(Integer.valueOf((String)eb.get("eventId")));
        		updateEh.setClassId(i+1);
        		ehService.save(updateEh);
        		check_hobby_exist++;
        	}
        }

        if(check_hobby_exist==0) {
        	ehBean updateEh = new ehBean();
    		updateEh.setEventId(Integer.valueOf((String)eb.get("eventId")));
    		updateEh.setClassId(1);
    		ehService.save(updateEh);
        }


        HashMap<String, String> a = new HashMap<>();
        a.put("stu", "success");
//        EventsBean updateEb = new EventsBean();
//        updateEb.set
//        eventService.save(updateEb);
//        return "success";
        return a;
        }




	@PostMapping("/getJson4")
    @ResponseBody
    public  HashMap<String, String> JsonController4(@RequestParam HashMap<String,Object> eb, HttpSession session) {
		MemberBean mb;
		mb = (MemberBean) session.getAttribute("member");
//       System.out.println();
		int hobby_num =5;

//		System.out.println(eb.get("eventId"));
//		System.out.println(eb.get("eventUrl"));
//		System.out.println(eb.get("eventDate"));
//		System.out.println(eb.get("eventName"));
//		System.out.println(eb.get("eventIntro"));
//		System.out.println(eb.get("eventInfo"));
//		System.out.println(eb.get("hb1"));
//		System.out.println(eb.get("hb2"));
//		System.out.println(eb.get("hb3"));
//		System.out.println(eb.get("hb4"));
//		System.out.println(eb.get("hb5"));
//		System.out.println(eb.keySet());
//		System.out.println((eb.get("hb4")).getClass().getSimpleName());
		System.out.println(Boolean.valueOf((String)(eb.get("hb4"))));
		System.out.println(Boolean.valueOf("true"));
//        EventsBean updateEb =eventService.findById(Integer.valueOf((String)eb.get("eventId")));
		EventsBean updateEb = new EventsBean();
        updateEb.setEventTitle((String)eb.get("eventName"));
        updateEb.setEventInfo((String)eb.get("eventInfo"));
        updateEb.setEventIntro((String)eb.get("eventIntro"));
        updateEb.setEventTime((String)eb.get("eventDate"));
        updateEb.setCounty((String)eb.get("eventCity"));
        updateEb.setEventUrl((String)eb.get("eventUrl"));
        updateEb.setLocation((String)eb.get("eventLocation"));
        if(eb.keySet().contains("data")) {
//        	System.out.println("有圖片");
        	updateEb.setEventImage(Base64.getDecoder().decode((eb.get("data").toString()).split(",")[1]));
        }
        SimpleDateFormat sdf2 = new SimpleDateFormat("yyyy-MM-dd");
        String Stime = ((String)eb.get("eventDate")).contains(":")?((String)eb.get("eventDate")).split("~")[0].split(" ")[0]:((String)eb.get("eventDate")).replace(" ","").split("~")[0];
        String Etime = ((String)eb.get("eventDate")).contains(":")?((String)eb.get("eventDate")).split("~")[((String)eb.get("eventDate")).split("~").length-1]: ((String)eb.get("eventDate")).replace(" ","").split("~")[((String)eb.get("eventDate")).replace(" ","").split("~").length-1];
        try {
			Date StartTimeSql= new Date(sdf2.parse(Stime.replace("/","-").replace("_","-")).getTime());
			System.out.println(sdf2.parse(Stime.replace("/","-").replace("_","-")));

			Date EndTimeSql= new Date(sdf2.parse(Etime.replace("/","-").replace("_","-")).getTime());
			updateEb.setStartTime(StartTimeSql);
			updateEb.setEndTime(EndTimeSql);
		} catch (ParseException e) {
			System.out.println(e);
			e.printStackTrace();
		}

//        today time
		java.util.Date date = new java.util.Date();
//		Timestamp timestamp2 = new Timestamp(date.getTime());
		Date dateSQL = new Date(date.getTime());
//		System.out.println(sdf2.format(timestamp2));
        updateEb.setUpdateTime(dateSQL);
//        System.out.println("here3");
        eventService.save(updateEb);
//        System.out.println("here4");
//        List<ehBean> ehb = ehService.findByEvent_id(Integer.valueOf((String)eb.get("eventId")));
//        List<Integer> ehobbies=new ArrayList<>();
//        System.out.println(ehobbies.isEmpty());
//
//        for(ehBean a:ehb) {
//			System.out.println(a.getClassId());
////			ehobbies.add(a.getClassId());
//			ehService.delete(a);
//
//		}
        List<EventsBean> FindnewEvents = eventService.findByEventTitle((String)eb.get("eventName"));
        Integer newEventID = FindnewEvents.get(FindnewEvents.size()-1).getId();
        System.out.println("event id:"+ newEventID.toString());
        //save memberevent
        MemberEventsBean meb = new MemberEventsBean();
		meb.setEventsId(newEventID);
		meb.setMemberId(mb.getMemberId());
		memberEventsService.save(meb);

		int check_hobby_exist = 0;
//		System.out.println("here5");
        for(Integer i=0 ;i<hobby_num;i++) {
        	System.out.println("here1");
        	String hb ="hb"+String.valueOf(i+1);
        	System.out.println(hb);
        	System.out.println(Boolean.valueOf((String)(eb.get(hb))));
        	if(Boolean.valueOf((String)(eb.get(hb)))) {
        		ehBean updateEh = new ehBean();
        		updateEh.setEventId(newEventID);
        		updateEh.setClassId(i+1);
        		ehService.save(updateEh);
        		check_hobby_exist++;
        	}
        }

        if(check_hobby_exist==0) {
        	ehBean updateEh = new ehBean();
    		updateEh.setEventId(Integer.valueOf((String)eb.get("eventId")));
    		updateEh.setClassId(1);
    		ehService.save(updateEh);
        }


        HashMap<String, String> a = new HashMap<>();
        a.put("stu", "success");
//        EventsBean updateEb = new EventsBean();
//        updateEb.set
//        eventService.save(updateEb);
//        return "success";
        return a;
    }


@PostMapping("/memberImgChange")
@ResponseBody
public  HashMap<String, String> JsonController7(@RequestParam HashMap<String,Object> eb, HttpSession session) {
	MemberBean mb;
	mb = (MemberBean) session.getAttribute("member");
//
//		String jsonData = java.net.URLDecoder.decode(eb, "UTF-8");

//		System.out.println(eb.get("data"));
//		System.out.println(eb.keySet());
//
	MemberPictureBean memPicBeam;
	memPicBeam = memberPictureService.findByMemberId(mb.getMemberId());
	if((eb.get("data").toString())!=null) {
		memPicBeam.setPicture(Base64.getDecoder().decode((eb.get("data").toString()).split(",")[1]));
		memberPictureService.save(memPicBeam);
		HashMap<String, String> a = new HashMap<>();
	    a.put("stu", "success");
	}

//	EventsBean updateEb = eventService.findById(4);
//    updateEb.setEventImage(Base64.getDecoder().decode((eb.get("data").toString()).split(",")[1]));
//    eventService.save(updateEb);





      HashMap<String, String> a = new HashMap<>();
      a.put("stu", "data null");
//        a.put("stuu", updateEb.getEventImage().toString());
//        System.out.println(updateEb.getEventImage().);
//        EventsBean updateEb = new EventsBean();
//        updateEb.set
//        eventService.save(updateEb);
//        return "success";
      System.out.println("changImg finished");
      return a;
      }



// 	@PostMapping("/your_backend_url")
//     @ResponseBody
//     public  HashMap<String, String> JsonController6(@RequestParam HashMap<String,Object> eb) {
// //
// //		String jsonData = java.net.URLDecoder.decode(eb, "UTF-8");

// //		System.out.println(eb.get("data"));
// //		System.out.println(eb.keySet());
// //
// 		EventsBean updateEb = eventService.findById(4);
//         updateEb.setEventImage(Base64.getDecoder().decode((eb.get("data").toString()).split(",")[1]));
//         eventService.save(updateEb);

// 		updateEb.getEventImage();



//         HashMap<String, String> a = new HashMap<>();
//         a.put("stu", "success");
// //        a.put("stuu", updateEb.getEventImage().toString());
// //        System.out.println(updateEb.getEventImage().);
// //        EventsBean updateEb = new EventsBean();
// //        updateEb.set
// //        eventService.save(updateEb);
// //        return "success";
//         return a;
//         }



//	@PostMapping("/new_img")
//    @ResponseBody
//    public  HashMap<String, String> newImg(@RequestParam HashMap<String,Object> eb) {
////
////		String jsonData = java.net.URLDecoder.decode(eb, "UTF-8");
//
////		System.out.println(eb.get("data"));
////		System.out.println(eb.keySet());
////
//		EventsBean updateEb = eventService.findById(4);
//        updateEb.setEventImage(Base64.getDecoder().decode((eb.get("data").toString()).split(",")[1]));
//        eventService.save(updateEb);
//
////		updateEb.getEventImage();
//
//        HashMap<String, String> a = new HashMap<>();
//        a.put("stu", "success");
////        a.put("stuu", updateEb.getEventImage().toString());
////        EventsBean updateEb = new EventsBean();
////        updateEb.set
////        eventService.save(updateEb);
////        return "success";
//        return a;
//        }


	@DeleteMapping("/deteteJson")
    @ResponseBody
    public  HashMap<String, String> JsonController5(@RequestParam HashMap<String,Object> eb) {
		int hobby_num =5;
		System.out.println("1");
		System.out.println("eventid:"+eb.get("eventId").toString());

		System.out.println(Boolean.valueOf((String)(eb.get("hb4"))));
		System.out.println(Boolean.valueOf("true"));

		EventsBean deleteEb =eventService.findById(Integer.valueOf((String)eb.get("eventId")));
		eventService.delete(deleteEb);
        List<ehBean> ehb = ehService.findByEvent_id(Integer.valueOf((String)eb.get("eventId")));
//      List<Integer> ehobbies=new ArrayList<>();
//      System.out.println(ehobbies.isEmpty());

        for(ehBean a:ehb) {
			System.out.println(a.getClassId());
//			ehobbies.add(a.getClassId());
			ehService.delete(a);

		}
        List<MemberEventsBean> deletemeb = memberEventsService.findByEventsId(Integer.valueOf((String)eb.get("eventId")));

        for(MemberEventsBean b:deletemeb) {
        	memberEventsService.delete(b);
        }


        HashMap<String, String> a = new HashMap<>();
        a.put("stu", "success");

        return a;
    }
	
	 @PostMapping("/updateMember")
	    public String updateMember(@RequestParam String username,
	                               @RequestParam String mail,
	                               @RequestParam String phone,
	                               @RequestParam Date birthday,
	                               
	                               // 添加其他需要修改的參數
	                               HttpSession session) {
	        // 在這裡處理更新會員資料的邏輯
	        MemberBean currentMember = (MemberBean) session.getAttribute("member");

	        if (currentMember == null || currentMember.getAccount().equals("Guest")) {
	            return "redirect:/login/login";
	        }

	        // 使用表單提交的數據更新 currentMember
	        currentMember.setUsername(username);
	        currentMember.setMail(mail);
	        currentMember.setPhone(phone);
	        currentMember.setBirthday(birthday);
	        // 添加其他需要更新的欄位

	        // 調用服務層保存更新後的會員資料
	        memberService.update(currentMember);

	        // 更新 session 中的會員資料
	        session.setAttribute("member", currentMember);
	        System.out.println("會員資料更新成功");
	        // 返回到會員資料頁面或其他需要的頁面
	        return "redirect:/Member";
	    }

}


////假设从数据库中检索到的数据是 byte[] 形式的 imageData
//byte[] imageData = // 从数据库中获取数据的过程
//
////将 byte[] 转换为 Base64 编码的字符串
//String base64Encoded = Base64.getEncoder().encodeToString(imageData);
//
////构建完整的 dataURL
//String dataURL = "data:image/png;base64," + base64Encoded;
//
////现在 dataURL 可以在前端中使用了
//System.out.println(dataURL);


//在 my.ini裡面 修改所有的max_allowed_packet = 1073741824

