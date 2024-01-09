<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>





<!DOCTYPE html>
<nav id="myNavbar"
		class="navbar navbar-expand-md bg-none w-100 fixed-top m-0 p-0"
		style="top: 0px;">
		<div class="container-fluid m-0 p-0 h-100">
			<a href="<c:url value='/' />" class="navbar-brand m-0 p-0"
				style="font-size: x-large;"> <img src="<c:url value='/static/image/logo1228.png' />"
				class=" m-0 p-0" alt="logo" width="65" height="50">
			</a>
			<div class="memberConMd d-flex d-md-none">
				<div class="nameCon">
					<a href="<c:url value='/Member' />"> <img class="rounded-circle img-fluid"
						src="<c:url value='/static/image/IMG_0987.JPG' />" alt="">
					</a>
				</div>
				
				<button class="navbar-toggler" type="button"
					data-bs-toggle="collapse" data-bs-target="#mynavbar"
					aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav me-auto mb-0">
					<li class="nav-item"><a id="news" onclick="nav_item_active()"
						class="nav-link" aria-current="page" href="<c:url value='/Favor' />">活動資訊</a></li>
					<li class="nav-item"><a id="trans" onclick="nav_item_active()"
						class="nav-link" aria-current="page" href="<c:url value='/trafficimfor' />">交通情報</a></li>
					<li class="nav-item"><a id="forum" onclick="nav_item_active()"
						class="nav-link" aria-current="page" href="<c:url value='' />">旅遊論壇</a></li>
					<li class="nav-item"><a id="aboutus"
						onclick="nav_item_active()" class="nav-link" aria-current="page"
						href="<c:url value='' />">關於我們</a></li>
				</ul>
				<div class="memberCon d-none d-md-flex">
					<div class="nameCon">
						<a href="<c:url value='/Member' />"> <img class="rounded-circle img-fluid"
							src="<c:url value='/static/image/IMG_0987.JPG' />" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</nav>