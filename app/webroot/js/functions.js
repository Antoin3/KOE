// $(function(){
// 	$('#delete').click(function(){
// 		$.post->action/delete;
// 		$('#bodybod').reload();
// 	});
// })
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