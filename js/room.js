document.addEventListener("DOMContentLoaded", function refresh(event){
    //$ajaxUtils.message = "";
    $ajaxUtils.sendGetRequest("../php/room.php", function(request){
        var recieve = JSON.parse(request.responseText);
        console.log(recieve);
        var sendUid = document.querySelector("#sendUid").value;
        for(var i=0; i<recieve.length;i++){
            var id = recieve[i][0];
            var message = recieve[i][1];
            console.log("id="+id+" message="+message+" sendUid="+sendUid);
            if(id == sendUid){
                console.log("hello");
                var chatBox = document.querySelector(".sended");
                chatBox.style.visibility = "visible";
                chatBox.innerHTML = message;
                document.querySelector(".main-content")
                .appendChild = chatBox;
            }
            else{
                var chatBox = document.querySelector(".recieved");
                chatBox.style.visibility = "visible";
                chatBox.innerHTML= message;
                document.querySelector(".main-content")
                .appendChild = chatBox;
            }
        }
    });
    /*document.querySelector("#send")
    .addEventListener("click", function(){
        var message = {message: document.querySelector("#message").value,sendUid: document.querySelector("#sendUid").value};
        message = JSON.stringify(message);
        $ajaxUtils.message = message;
        $ajaxUtils.sendGetRequest("../php/room.php", function(request){
            var message = JSON.parse(request.responseText);
            console.log("recieved"+message);
        });
    });*/
});