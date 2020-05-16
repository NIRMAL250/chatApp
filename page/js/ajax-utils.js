(function (global){
    var ajaxUtils = {};
    function getRequestObject(){
        if(global.XMLHttpRequest){
            return (new XMLHttpRequest);
        }
        else if(global.ActiveXObject){
            return (new ActiveXObject("Microsoft.XMLHTTP"));
        }
        else{
            global.alert("AJAX not supported");
            return null;
        }
    }
    ajaxUtils.sendGetRequest = function(requestUrl, responseHandler){
        var request = getRequestObject();
        request.onreadystatechange = 
            function(){
                handleResponse(request, responseHandler);
            }
        request.open("POST",requestUrl, true);
        //if($ajaxUtils.message == "")
        request.send(null);
        /*else{
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send("id="+$ajaxUtils.message.sendUid+"message="+$ajaxUtils.message.message);
        }*/
    };
    function handleResponse(request, responseHandler){
        if(request.readyState == 4 &&
            request.status ==200){
                responseHandler(request);
            }
    }
    global.$ajaxUtils = ajaxUtils;
})(window);