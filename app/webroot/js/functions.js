$(function(){
	$('#edit').click(function(){
		$.post->action/edit;
		$('.raspberries index').empty().append('edit.ctp');
	});
	$('.reboot').click(function(){
		xhr = getXMLHttpRequest();

		xhr.open("POST","http://10.10.10.102/",true);
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("jsonrpc?request={\"jsonrpc\":\"2.0\",\"method\":\"System.Reboot\",\"id\":\"1\"}");
	});
})
function getXMLHttpRequest() {
    var xmlhttp = null;
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch(e) {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    } else {
        xmlhttp = new XMLHttpRequest();
    }
    } else {
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
        return null;
    }
    return xmlhttp;
}