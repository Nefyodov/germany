window.onload = function () {
    var inp_address = document.getElementById('address');
    var inp_month = document.getElementById('month');

    document.getElementById('send').onclick = function () {
        var data = 'address=' + document.getElementById('address').value + '&' + 'month=' + inp_month.value;
        // alert(data);
        showAsyncRequest(data);
    }
}

var request;
var url = 'core/ajax.php';

function showAsyncRequest(data) {
    request = getXmlHttpRequest();
    request.open('POST', url, true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(data);
    request.onreadystatechange = showAsyncRequestComplete;
}

function showAsyncRequestComplete() {
    if (request.readyState == 4 && request.status == 200){
        var result = document.getElementById("selection");
        result.innerHTML= request.responseText;
    }
}
function getXmlHttpRequest() {
    if (window.XMLHttpRequest){
        try {return new XMLHttpRequest();}
        catch (e){}
    }
    else if (window.ActiveXObject){
        try {
            return new ActiveXObject('Msxml2.XMLHTTP');
        } catch (e){}
        try {
            return new ActiveXObject('Microsoft.XMLHTTP');
        } catch (e){}
    }
    return null;
}
