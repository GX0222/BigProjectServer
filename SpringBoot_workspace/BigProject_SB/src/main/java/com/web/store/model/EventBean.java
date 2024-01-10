package com.web.store.model;

import java.io.Serializable;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;
import jakarta.persistence.Transient;

// 本類別封裝單筆活動資料
@Entity
@Table(name = "Events")
public class EventBean implements Serializable {
	private static final long serialVersionUID = 1L;
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Integer id;

	//@Transient
	private String startTime;
	private String eventTitle;
	private String eventTime;
	private String county;
	private String location;
	private String eventIntro;
	private String eventInfo;
	private String eventUrl;
	
	public EventBean() {
        
    }

	
	public EventBean(Integer id, String startTime, String eventTitle, String eventTime, String county, String location,
			String eventIntro, String eventInfo, String eventUrl) {
		this.id = id;
		this.startTime = startTime;
		this.eventTitle = eventTitle;
		this.eventTime = eventTime;
		this.county = county;
		this.location = location;
		this.eventIntro = eventIntro;
		this.eventInfo = eventInfo;
		this.eventUrl = eventUrl;
	}
	public Integer getId() {
		return id;
	}
	public void setId(Integer id) {
		this.id = id;
	}
	public String getStartTime() {
		return startTime;
	}
	public void setStartTime(String startTime) {
		this.startTime = startTime;
	}
	public String getEventTitle() {
		return eventTitle;
	}
	public void setEventTitle(String eventTitle) {
		this.eventTitle = eventTitle;
	}
	public String getEventTime() {
		return eventTime;
	}
	public void setEventTime(String eventTime) {
		this.eventTime = eventTime;
	}
	public String getCounty() {
		return county;
	}
	public void setCounty(String county) {
		this.county = county;
	}
	public String getLocation() {
		return location;
	}
	public void setLocation(String location) {
		this.location = location;
	}
	public String getEventIntro() {
		return eventIntro;
	}
	public void setEventIntro(String eventIntro) {
		this.eventIntro = eventIntro;
	}
	public String getEventInfo() {
		return eventInfo;
	}
	public void setEventInfo(String eventInfo) {
		this.eventInfo = eventInfo;
	}
	public String getEventUrl() {
		return eventUrl;
	}
	public void setEventUrl(String eventUrl) {
		this.eventUrl = eventUrl;
	}
	
	
	
//	@Transient
//	private MultipartFile  productImage;
//
//	public MultipartFile getProductImage() {
//	    return productImage;
//	}
//
//	public void setProductImage(MultipartFile productImage) {
//	    this.productImage = productImage;
//	}
//
//	@ManyToOne(cascade=CascadeType.ALL)
//	@JoinColumn(name="FK_CompanyBean_Id")
//    private CompanyBean companyBean;
//
//	public EventBean(Integer bookID, String title, String author,
//			double price, double discount, String fileName,
//			String bookNo, Blob coverImage, int companyId, String category) {
//		this.bookId = bookID;
//		this.title = title;
//		this.author = author;
//		this.price = price;
//		this.discount = discount;
//		this.fileName = fileName;
//		this.bookNo = bookNo;
//		this.coverImage = coverImage;
//		this.companyId = companyId;
//		this.category = category;
//		this.stock = 0;
//	}
//
//	public EventBean(Integer bookID, String title, String author,
//			Double price, Double discount, String fileName,
//			String bookNo, Blob coverImage, Integer stock, String category, CompanyBean companyBean) {
//		this.bookId = bookID;
//		this.title = title;
//		this.author = author;
//		this.price = price;
//		this.discount = discount;
//		this.fileName = fileName;
//		this.bookNo = bookNo;
//		this.coverImage = coverImage;
//		this.companyBean = companyBean;
//		this.category = category;
//		this.stock = stock;
//	}
//
//	public EventBean() {
//	}
//
//	public Integer getBookId() {   // bookId
//		return bookId;
//	}
//	public void setBookId(Integer bookID) {
//		this.bookId = bookID;
//	}
//
//	public CompanyBean getCompanyBean() {
//		return companyBean;
//	}
//
//	public void setCompanyBean(CompanyBean companyBean) {
//		this.companyBean = companyBean;
//	}
//
//	public String getTitle() {
//		return title;
//	}
//
//	public void setTitle(String title) {
//		this.title = title;
//	}
//
//	public String getAuthor() {
//		return author;
//	}
//
//	public void setAuthor(String author) {
//		this.author = author;
//	}
//
//	public String getPriceStr() {
//		if (priceStr == null) {
//			priceStr = String.valueOf(price);
//		}
//		return priceStr;
//	}
//
//	public void setPriceStr(String priceStr) {
//		this.priceStr = priceStr;
//	}
//
//	public Double getPrice() {
//		return price;
//	}
//
//	public void setPrice(double price) {
//		this.price = price;
//		if (priceStr == null) {
//			priceStr = String.valueOf(price);
//		}
//	}
//
//	public Double getDiscount() {
//		return discount;
//	}
//	public void setDiscount(Double discount) {   //0.8, 0.75
//		if (discount  == null) {
//			this.discount = 1.0;
//			discountStr = "";
//			return;
//		}
//		this.discount = discount;
//
//		if (discount == 1) {
//			discountStr = "";
//		} else {
//			int dnt = (int)(discount * 100);
//			if (dnt % 10 == 0) {
//				discountStr = (dnt / 10) + "折";
//			} else {
//				discountStr = " "  + dnt + "折";
//			}
//
//		}
//	}
//	public String getFileName() {
//		return fileName;
//	}
//	public void setFileName(String fileName) {
//		this.fileName = fileName;
//	}
//	public String getBookNo() {
//		return bookNo;
//	}
//	public void setBookNo(String bookNo) {
//		this.bookNo = bookNo;
//	}
//
//	public String getDiscountStr() {
//		if (discountStr == null) {
//			setDiscount(discount);
//		}
//		return discountStr;
//	}
//	public Blob getCoverImage() {
//		return coverImage;
//	}
//	public void setCoverImage(Blob coverImage) {
//		this.coverImage = coverImage;
//	}
//
//	public Integer getStock() {
//		return stock;
//	}
//
//	public void setStock(Integer stock) {
//		this.stock = stock;
//	}
//
//	public Integer getCompanyId() {
//		return companyId;
//	}
//
//	public void setCompanyId(Integer companyId) {
//		this.companyId = companyId;
//	}
//
//	public String getCategory() {
//		return category;
//	}
//
//	public void setCategory(String category) {
//		this.category = category;
//	}
//
//	public void setPrice(Double price) {
//		this.price = price;
//	}
//
//	@Override
//	public String toString() {
//		return "BookBean [bookId=" + bookId + ", title=" + title + ", author=" + author + ", price=" + price
//				+ ", priceStr=" + priceStr + ", discount=" + discount + ", coverImage=" + coverImage + ", fileName="
//				+ fileName + ", bookNo=" + bookNo + ", discountStr=" + discountStr + ", category=" + category
//				+ ", stock=" + stock + ", companyId=" + companyId + ", companyBean=" + companyBean + "]";
//	}

}
