var login = function(state){
    if(state==="on") document.getElementById("login").style.display = "block";
    else if(state==="off") document.getElementById("login").style.display = "none";
}


// var test = false;
// console.log(test);


/*function postAjax(url, data, success) {
    var params = typeof data == 'string' ? data : Object.keys(data).map(
        function(k){ 
            return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) 
        })
        .join('&');

    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    xhr.open('POST', url);
    xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200)
        {
              success(xhr.responseText); 
              
        }
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(params);
    return xhr;
}*/

