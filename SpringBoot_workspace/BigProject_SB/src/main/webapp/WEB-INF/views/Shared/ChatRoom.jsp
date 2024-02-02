<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib uri="http://www.springframework.org/tags" prefix="spring" %>
<!DOCTYPE html>
<div id="ChatRoomCon">
	<div class="ChatRoom">
		Public Room
        <div class="Room">
            <div id="PublicRoomCRT" class="CRText">
                <div id ="PublicRoom" class="simplebar-content-wrapper" data-simplebar>
                      
                </div>
            </div>
            <div class="CRInput">
                <%-- <input type="text" class="" placeholder="Aa" aria-label="Aa" aria-describedby="PublicRoomBtn">
                <button id="PublicRoomBtn" class="" type="button">Submit</button> --%>
                <p contenteditable="true">Aa</p>
                <span class="material-symbols-outlined">send</span>
            </div>
        </div>
	</div>
    <div class="ChatRoom">
		私人 Room
        <div class="Room">
            <div  class="CRText">
                <div id ="PerSonRoom" class="simplebar-content-wrapper" data-simplebar>
                      
                </div>
            </div>
            <div class="CRInput">
                <%-- <input type="text" class="" placeholder="Aa" aria-label="Aa" aria-describedby="PublicRoomBtn">
                <button id="PublicRoomBtn" class="" type="button">Submit</button> --%>
                <p contenteditable="true">Aa</p>
                <span class="material-symbols-outlined">send</span>
            </div>
        </div>
	</div>
</div>