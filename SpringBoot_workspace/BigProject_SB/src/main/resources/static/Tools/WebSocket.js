
// 創建 StompJs 客戶端並設置參數
const client = new StompJs.Client({
    brokerURL: 'ws://localhost:80/WebSocket',
    debug: function (str) {
        console.log(str);
    },
    reconnectDelay: 5000,
    heartbeatIncoming: 4000,
    heartbeatOutgoing: 4000,
});

client.onConnect = function (frame) {
    console.log('WebSocket connected!');
    client.subscribe('/WSMessage/Mes', function (message) {
        $("#PublicRoom").find(".simplebar-content").append(message.body);
        $("#PublicRoom").find(".simplebar-content").append("<hr>");
    });
};

// 定義 onStompError 函數，用於處理 Stomp 錯誤
client.onStompError = function (frame) {
    console.log('Broker reported error: ' + frame.headers['message']);
    console.log('Additional details: ' + frame.body);
};

// 啟動客戶端
client.activate();

