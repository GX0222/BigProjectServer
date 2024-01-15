package com.web.store.SmallTools;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.springframework.scheduling.annotation.Async;
import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.stereotype.Service;

import com.fasterxml.jackson.databind.JsonNode;
import com.fasterxml.jackson.databind.ObjectMapper;

@Service
public class WeatherTool {

	private static final String API_URL = "https://opendata.cwa.gov.tw/api/v1/rest/datastore/O-A0001-001?Authorization=CWA-91CBC5B9-4168-4014-8542-1DCD1C42241E&format=JSON&WeatherElement=Weather,AirTemperature&GeoInfo=CountyName,TownName\r\n";

	private List<Map<String, Object>> cache = new ArrayList<>();

	@Scheduled(cron = "0 2 * * * *")
	public void getNowWeatherByHour() {
		SimpleDateFormat sdf = new SimpleDateFormat("HH:mm:ss");
		String currentTime = sdf.format(new Date());
		
		if (currentTime.endsWith(":02:00")) {
			// 在整點2分時執行資料抓取
			List<Map<String, Object>> newData = getUrlData();
			// 更新快取
			cache = newData;
			// 在這裡處理新的資料，例如更新快取或其他操作
			System.out.println("氣象資料更新: " + currentTime);
		}

	}

	public List<Map<String, Object>> getNowWeather() {
		if (cache.isEmpty()) {
			List<Map<String, Object>> newData = getUrlData();
			cache = newData;
		}
		return cache;
	}

	public List<Map<String, Object>> getNowWeatherByCity(String city) {
		List<Map<String, Object>> resData = new ArrayList<>();
		if (cache.isEmpty()) {
			List<Map<String, Object>> newData = getUrlData();
			cache = newData;
		}
		for(Map<String, Object> data : cache) {
			if(((String) data.get("CountyName")).equals(city)) {
				resData.add(data);
			}
		}
		return resData;
	}
	
	public Map<String, Object> getNowWeatherByTown(String city, String town) {
		List<Map<String, Object>> cityData = new ArrayList<>();
		cityData = getNowWeatherByCity(city);
		
		for(Map<String, Object> data : cityData) {
			if(((String) data.get("CountyName")).equals(city)) {
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
				
				//解析JSON => List<Map<String, Object>>
				
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
