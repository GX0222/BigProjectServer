<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>

<div class="homeLeft">
    <h5>會員專區</h5>
    <ul>
        <li><a class="aa" href="<c:url value='/Member' />">基本資料</a></li>
        <li><a class="aa" href="<c:url value='/Love' />">我的收藏</a></li>
        <li><a class="aa" href="<c:url value='/Mimi' />">隱私設定</a></li>
    </ul>
    <hr>
    <h5>活動專區</h5>
    <ul>
        <li><a class="aa" href="<c:url value='/List' />">我的活動</a></li>
        <li><a class="aa" href="<c:url value='/Update' />">上架活動</a></li>
    </ul>
</div>