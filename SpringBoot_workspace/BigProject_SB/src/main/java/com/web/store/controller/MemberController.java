package com.web.store.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.web.store.model.MemberBean;

import jakarta.servlet.http.HttpSession;

@Controller
public class MemberController {
	MemberEventsService memberEventsService;
	EventService eventService;
	EhService ehService;
	
	
	

	public MemberController(MemberEventsService memberEventsService, EventService eventService, EhService ehService) {
		super();
		this.memberEventsService = memberEventsService;
		this.eventService = eventService;
		this.ehService = ehService;
	}

	@GetMapping("/Member")
	public String member(Model model, HttpSession session) {
		MemberBean mb;
		mb = (MemberBean) session.getAttribute("member");
		System.out.println(mb.getAccount());
		if (mb == null || mb.getAccount().equals("Guest")) {
			return "redirect:/login/login";
		}
		System.out.println(mb.getUsername());
		return "Member/Member";
	}

	@GetMapping("/Love")
	public String love(Model model) {
		return "Member/Love";
	}

	@GetMapping("/Update")
	public String update(Model model) {
		return "Member/Update";
	}

	@GetMapping("/List")
	public String list(Model model) {
		List<MemberEventsBean> mm = memberEventsService.findByMemberId(1);
		//在memberEvent表格裡面尋找會員有幾個活動
		model.addAttribute("table_size",mm.size());
		return "Member/List";
	}

	@GetMapping("/Trafficimfor")
	public String trafficimfor(Model model) {
		return "trafficimfor";
	}

	@GetMapping("/Ian/index'")
	public String ianIndex(Model model) {
		return "index";
	}

	@GetMapping("/eventlist/item/{id}")
	@ResponseBody

	public List<Object> eventlist(Model model,@PathVariable Integer id) {

		List<Object> out = new ArrayList<>();
		EventsBean eb = eventService.findById(id);
		List<ehBean> ehb = ehService.findByEvent_id(id);
		
		for(ehBean a:ehb) {
			System.out.println(a.getClassId());
		}

		out.add(eb);
		out.add(ehb);
		return out;		
	}
	
	
	@GetMapping("/List/item")
	@ResponseBody
	public List<EventsBean> Listevent(Model model) {
	List<MemberEventsBean> mm = memberEventsService.findByMemberId(1);

	List<EventsBean> out = new ArrayList<>();
	model.addAttribute("table_size",mm.size());
	for(MemberEventsBean mbean:mm) {
		Integer idd = mbean.getEvent_id123();
		EventsBean eb =eventService.findById(idd);
		out.add(eb);
	}
	return out;
	}
	
	@PostMapping("/test/item")
	@ResponseBody

	public String putMethodName(@RequestParam("eventId") String id, @RequestParam("eventDate") String name,
			@RequestParam("eventInfo") String id2,@RequestParam("eventIntro") String id3,@RequestParam("eventName") String id4) {
		System.out.println(id+"===="+name);

		return "OK";

	}
	
	
	@PostMapping("/getJson")
    @ResponseBody
    public String JsonController(@RequestParam("id") String id, @RequestParam("name") String name) {
        System.out.println(id+"===="+name);
        return "student";}
	
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
        a.put("stu", "student");

        return a;
        }
	
	@PostMapping("/getJson3")
    @ResponseBody
    public  HashMap<String, String> JsonController3(@RequestParam HashMap<String,Object> eb) {

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
		System.out.println(eb.keySet());

		System.out.println(Boolean.valueOf((String)(eb.get("hb4"))));
		System.out.println(Boolean.valueOf("true"));
        EventsBean updateEb =eventService.findById(Integer.valueOf((String)eb.get("eventId")));
        updateEb.setEventTitle((String)eb.get("eventName"));
        updateEb.setEventInfo((String)eb.get("eventInfo"));
        updateEb.setEventIntro((String)eb.get("eventIntro"));
        updateEb.setEventTime((String)eb.get("eventDate"));
        eventService.save(updateEb);
        List<ehBean> ehb = ehService.findByEvent_id(Integer.valueOf((String)eb.get("eventId")));

        
        for(ehBean a:ehb) {
			System.out.println(a.getClassId());

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
        a.put("stu", "student");

        return a;
        }
	
	
	
	
	@PostMapping("/getJson4")
    @ResponseBody
    public  HashMap<String, String> JsonController4(@RequestParam HashMap<String,Object> eb) {

		int hobby_num =5;
		

		System.out.println(eb.get("eventUrl"));
		System.out.println(eb.get("eventDate"));
		System.out.println(eb.get("eventName"));
		System.out.println(eb.get("eventIntro"));
		System.out.println(eb.get("eventInfo"));
		System.out.println(eb.get("hb1"));
		System.out.println(eb.get("hb2"));
		System.out.println(eb.get("hb3"));
		System.out.println(eb.get("hb4"));
		System.out.println(eb.get("hb5"));

		System.out.println(Boolean.valueOf((String)(eb.get("hb4"))));
		System.out.println(Boolean.valueOf("true"));

		EventsBean updateEb = new EventsBean();
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

        eventService.save(updateEb);

        List<EventsBean> FindnewEvents = eventService.findByEventTitle((String)eb.get("eventName"));
        Integer newEventID = FindnewEvents.get(FindnewEvents.size()-1).getId();
        System.out.println("event id:"+ newEventID.toString());
		int check_hobby_exist = 0;

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
        a.put("stu", "student");

        return a;
        }
	
	@PostMapping("/your_backend_url")
    @ResponseBody
    public  HashMap<String, String> JsonController5(@RequestParam HashMap<String,Object> eb) {

		EventsBean updateEb = eventService.findById(4);
        updateEb.setEventImage(Base64.getDecoder().decode((eb.get("data").toString()).split(",")[1]));
        eventService.save(updateEb);
		
		updateEb.getEventImage();
		
		
		
        HashMap<String, String> a = new HashMap<>();
        a.put("stu", "student");

        return a;
        }
}
