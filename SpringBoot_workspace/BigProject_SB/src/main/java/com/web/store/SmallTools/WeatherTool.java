package com.web.store.SmallTools;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.text.Collator;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.Date;
import java.util.HashMap;
import java.util.HashSet;
import java.util.LinkedList;
import java.util.List;
import java.util.Locale;
import java.util.Map;
import java.util.Set;

import org.springframework.scheduling.annotation.Async;
import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.stereotype.Service;

import com.fasterxml.jackson.databind.JsonNode;
import com.fasterxml.jackson.databind.ObjectMapper;

@Service
public class WeatherTool {

	private static final String API_URL = "https://opendata.cwa.gov.tw/api/v1/rest/datastore/O-A0001-001?Authorization=CWA-91CBC5B9-4168-4014-8542-1DCD1C42241E&format=JSON&WeatherElement=Weather,AirTemperature&GeoInfo=CountyName,TownName\r\n";

	private List<Map<String, Object>>[] cache;
	private int cacheCount = 3;

	private List<String> countyListCache = new LinkedList<>();
	private Set<Map<String, Object>> townListCache = new HashSet<>();
	private List<String> townListByCountyCache = new ArrayList<>();
	private List<String> allWeather = new LinkedList<>();
	
	 public WeatherTool() {
	        this.cache = new List[cacheCount];
	        for (int i = 0; i < cacheCount; i++) {
	            this.cache[i] = new ArrayList<>();
	        }
	    }

	@Scheduled(cron = "0 2 * * * *")
	public void getNowWeatherByHour() {
		SimpleDateFormat sdf = new SimpleDateFormat("HH:mm:ss");
		String currentTime = sdf.format(new Date());

		if (currentTime.endsWith(":02:00")) {
			List<Map<String, Object>> newData = getUrlData();
			if (cache[0].isEmpty()) {
				cache[0] = new ArrayList<>(newData);
			} else {
				for (int i = (cacheCount - 1); i > 0; i--) {
					cache[i] = new ArrayList<>(cache[i - 1]);
				}
				cache[0] = new ArrayList<>(newData);
			}

			updateAllCountyList();
			updateAllTownList();
			updateAllWeather();
			System.out.println("氣象資料更新: " + currentTime);
		}

	}

	public List<String> getAllWeather() {
		if (allWeather.isEmpty()) {
			updateAllWeather();
		}
		return allWeather;
	}

	// 開發用，更新所有天氣狀態
	public void updateAllWeather() {
		if (cache[0] == (null)) {
			get1stNowWeather();
		}

		Set<String> weatherSet = new HashSet<>();
		for (Map<String, Object> data : cache[0]) {
			weatherSet.add(data.get("Weather").toString());
		}

		allWeather = new ArrayList<>(weatherSet);
		Collator collator = Collator.getInstance(Locale.TRADITIONAL_CHINESE);
		Collections.sort(allWeather, collator);
		System.out.println("更新所有天氣狀態成功...");
	}

	public void updateAllTownList() {
		if (cache[0] == (null) || cache[0].isEmpty()) {
			get1stNowWeather();
		}

		for (Map<String, Object> data : cache[0]) {
			Map<String, Object> town = new HashMap<>();
			town.put("CountyName", data.get("CountyName").toString());
			town.put("TownName", data.get("TownName").toString());
			townListCache.add(town);
		}
	}

	public Set<Map<String, Object>> getAllTown() {
		if (townListCache.isEmpty()) {
			updateAllTownList();
		}
		return townListCache;
	}

	public List<String> getTownByCounty(String CountyName) {
		if (townListCache.isEmpty()) {
			updateAllTownList();
		}
		List<String> townList = new ArrayList<>();
		for (Map<String, Object> countyTown : townListCache) {
			if (((String) countyTown.get("CountyName")).equals(CountyName)) {
				townList.add(countyTown.get("TownName").toString());
			}
		}
		Collections.sort(townList);
		townListByCountyCache = new LinkedList<>(townList);
		return townList;
	}

	public void updateAllCountyList() {
		if (cache[0] == (null) || cache[0].isEmpty()) {
			get1stNowWeather();
		}
		Set<String> countys = new HashSet<>();
		for (Map<String, Object> data : cache[0]) {
			String county = data.get("CountyName").toString();
			countys.add(county);
		}
		countyListCache = new LinkedList<>(countys);
		Collections.sort(countyListCache);
	}

	public List<String> getAllCounty() {
		if (countyListCache.isEmpty()) {
			updateAllCountyList();
		}
		return countyListCache;
	}

	public List<Map<String, Object>> getNowWeather() {
		if (cache[0] == (null) || cache[0].isEmpty()) {
			get1stNowWeather();
		}
		return cache[0];
	}

	public List<Map<String, Object>> getNowWeatherByCity(String city, int cacheIndex) {
		List<Map<String, Object>> resData = new ArrayList<>();
		if (cache[0] == (null) || cache[0].isEmpty()) {
			get1stNowWeather();
		}
		for (Map<String, Object> data : cache[cacheIndex]) {
			if (((String) data.get("CountyName")).equals(city)) {
				resData.add(data);
			}
		}
		return resData;
	}

	public Map<String, Object> getNowWeatherByTown(String city, String town) {
		List<Map<String, Object>> cityData = new ArrayList<>();
		cityData = getNowWeatherByCity(city, 0);

		for (Map<String, Object> data : cityData) {
			if (((String) data.get("TownName")).equals(town)) {
				String dWeather = data.get("Weather").toString();
				String dTemp = data.get("AirTemperature").toString();
				if (dWeather.startsWith("-99")) {
					String newWeather = getLostDataByTown(city, town, "Weather");
					data.put("Weather", newWeather);
					if (dTemp.startsWith("-99")) {
						String newTemp = getLostDataByTown(city, town, "AirTemperature");
						data.put("AirTemperature", newTemp);
					}
				} else if (dTemp.startsWith("-99")) {
					String newTemp = getLostDataByTown(city, town, "AirTemperature");
					data.put("AirTemperature", newTemp);
				} else {
					System.out.println("資料正確");
				}
				return data;
			}
		}

		Map<String, Object> errMap = new HashMap<>();
		errMap.put("CountyName", "無資料");
		errMap.put("TownName", "無資料");
		errMap.put("Weather", "無資料");
		errMap.put("AirTemperature", "無資料");
		return errMap;
	}

	/////////////////////////////////////////////////////////////////////
	public String getLostDataByTown(String city, String town, String lostData) {
		List<Map<String, Object>> cityData;

		for (int i = 1; i < cacheCount; i++) {
			cityData = new ArrayList<>(getNowWeatherByCity(city, i));
			for (Map<String, Object> data : cityData) {
				if (((String) data.get("TownName")).equals(town)) {
					if (!((String) data.get(lostData)).startsWith("-99")) {
						System.out.println("==========");
						System.out.println("資料遺失: " + lostData);
						System.out.println("使用備用資料: " + i);
						System.out.println(data.get(lostData).toString());
						System.out.println(data.get("AirTemperature").toString());
						System.out.println("==========");
						return data.get(lostData).toString();
					}
				}
			}
		}

		cityData = new ArrayList<>(getNowWeatherByCity(city, 0));
		if (lostData.equals("Weather")) {
			Map<String, Integer> howMany = new HashMap<>();
			for (Map<String, Object> data : cityData) {
				String key = data.get("Weather").toString();
				if (!key.startsWith("-99")) {
					howMany.put(key, (howMany.getOrDefault(key, 0) + 1));
				}
			}
			String maxWeather = null;
			int maxMany = 0;
			for (Map.Entry<String, Integer> KV : howMany.entrySet() ) {
				if(KV.getValue()>maxMany) {
					maxWeather = KV.getKey();
					maxMany = KV.getValue();
				}
			}
			if(maxWeather == null || maxWeather.isEmpty()) {
				System.out.println("氣象資料為空錯誤");
				maxWeather = "晴天";
			}
			return maxWeather;
		} else {
			double avg; 
//			townListByCountyCache;
			return "87.2";
		}
	}

	public void get1stNowWeather() {
		List<Map<String, Object>> newData = getUrlData();
		for (int i = 0; i < cacheCount; i++) {
			cache[i] = new ArrayList<>(newData);
		}
		System.out.println("第一筆天氣資料請求成功...");
	}

	@Async
	public List<Map<String, Object>> getUrlData() {
		List<Map<String, Object>> resData = new ArrayList<>();
		Map<String, Object> errMap = new HashMap<>();
		try {
			URL url = new URL(API_URL);
			HttpURLConnection connection = (HttpURLConnection) url.openConnection();

			// 設定請求方式為GET
			connection.setRequestMethod("GET");

			// 取得回應碼
			int responseCode = connection.getResponseCode();

			// 如果回應碼是200，表示請求成功
			if (responseCode == HttpURLConnection.HTTP_OK) {
				// 使用 BufferedReader 讀取 API 回傳的 JSON 數據
				BufferedReader reader = new BufferedReader(new InputStreamReader(connection.getInputStream()));
				String line;
				StringBuilder response = new StringBuilder();
				int linesRead = 0;

				while ((line = reader.readLine()) != null && linesRead < 1) {
					response.append(line);
					linesRead++;
				}
				reader.close();

				// 解析JSON => List<Map<String, Object>>

				try {
					ObjectMapper objectMapper = new ObjectMapper();
					JsonNode rootNode = objectMapper.readTree(response.toString());
					JsonNode recordsNode = rootNode.get("records");
					JsonNode stationArrayNode = recordsNode.get("Station");

					for (JsonNode stationNode : stationArrayNode) {
						JsonNode geoInfoNode = stationNode.get("GeoInfo");
						String countyName = geoInfoNode.get("CountyName").asText();
						String townName = geoInfoNode.get("TownName").asText();
						String weather = stationNode.path("WeatherElement").path("Weather").asText();
						String airTemperature = stationNode.path("WeatherElement").path("AirTemperature").asText();

						// 組織為 JSON 格式
						Map<String, Object> cityInfo = new HashMap<>();
						cityInfo.put("CountyName", countyName);
						cityInfo.put("TownName", townName);
						cityInfo.put("Weather", weather);
						cityInfo.put("AirTemperature", airTemperature);

						// 將結果加入列表
						resData.add(cityInfo);

					}
				} catch (Exception e) {
					e.printStackTrace();
					// 處理 JSON 解析時的異常
					errMap.put("異常位置", "處理 JSON 解析時的異常");
					errMap.put("異常訊息", e);
					resData.add(errMap);
				}
			} else {
				errMap.put("異常位置", "URL請求時的異常");
				errMap.put("異常訊息", "請求失敗，回應碼：" + responseCode);
				resData.add(errMap);
			}
		} catch (Exception e) {
			e.printStackTrace();
			errMap.put("異常位置", "URL連接時的異常");
			errMap.put("異常訊息", e);
			resData.add(errMap);
		}
		return resData;
	}

}
