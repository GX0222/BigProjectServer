
// 創建 StompJs 客戶端並設置參數
const client = new StompJs.Client({
    brokerURL: 'ws://localhost:80/WebSocket',
    debug: function (str) {
        // console.log(str);
    },
    reconnectDelay: 5000,
    heartbeatIncoming: 4000,
    heartbeatOutgoing: 4000,
});

client.onConnect = function (frame) {
    console.log('WebSocket connected!');
    client.subscribe('/WSMessage/Mes', function (message) {
        var parsedBody = JSON.parse(message.body);
        var publicRoom = $("#PublicRoom");
        var messageElement = $("<div class='resBox'>").text(parsedBody.mesg);
        var memImg = $("<img class='resMemImg rounded-circle img-fluid'>").attr('src', "data:image/png;base64, "+parsedBody.sendMemImg);
        var mesgg = $("<div class='resBigBox'>").append(memImg).append(messageElement);
        publicRoom.find(".simplebar-content").append(mesgg); 
    });
};

// 定義 onStompError 函數，用於處理 Stomp 錯誤
client.onStompError = function (frame) {
    console.log('Broker reported error: ' + frame.headers['message']);
    console.log('Additional details: ' + frame.body);
};

// 啟動客戶端
client.activate();

