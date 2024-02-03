<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib uri="http://www.springframework.org/tags" prefix="spring" %>
<!DOCTYPE html>
<div id="ChatRoomCon">
	<div class="ChatRoom">
<!-- 		Public Room -->
		<img class="azxc" src="<c:url value='/static/image/chat.png' />">
        <div class="Room">
            <div id="PublicRoomCRT" class="CRText">
                <div id ="PublicRoom" class="simplebar-content-wrapper" data-simplebar>
                      
                </div>
            </div>
            <div class="CRInput">
                <p class="simplebar-content-wrapper" contenteditable="true" data-simplebar></p>
                <span class="SendMesg material-symbols-outlined" data-memID="${member.getMemberId()}">send</span>
            </div>
        </div>
	</div>
    <!-- <div class="ChatRoom">
		私人 Room
        <div class="Room">
            <div  class="CRText">
                <div id ="PerSonRoom" class="simplebar-content-wrapper" data-simplebar>
                      
                </div>
            </div>
            <div class="CRInput">
                <p class="simplebar-content-wrapper" contenteditable="true" data-simplebar></p>
                <span class="SendMesg material-symbols-outlined" data-memID="${member.getMemberId()}">send</span>
            </div>
        </div>
	</div> -->
</div>