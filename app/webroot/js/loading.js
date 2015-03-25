
function chargement(message) {
    $('body').prepend("<div id='wait' style='border-radius:5px;border-style:groove;border-color:black;z-index:1;position:absolute;height:150px;width:400px;top:40%;left:40%;text-align:center;font-weight:bold;background-color:#5a5a5a;' ><br/><a style='z-index:2;color:white;font-size:large;'>" + message + "</a><br/><br/><img src='app/webroot/img/chargement.gif' ></img></div>");
}
function scan(host){
	var host2 = host.substring(host.lastIndexOf("."));
	var ip = host.replace(host2,".");
	var result = new Array();
	for (var i = 1; i < 255; i++) {
		
		result[i] = $.ajax({
		  url: "http://" + ip + i + "/",
		  async: true,
		  timeout: 20000,
		  type: 'HEAD',
		  crossDomain: true,
		  error: function(jqXHR, textStatus, errorThrown){
		  	console.log(jqXHR);
		  	console.log(textStatus);
		  	console.log(errorThrown);
		  }
		});
	};
	setTimeout(function(){
		$('#wait').hide();
		$('#address').replaceWith('<select name="data[Raspberry][address]" id="address" class="form-control"></select>');
		for (var j = 1; j < 255; j++) {
		if ((result[j].readyState==0)) {
			if (result[j].statusText=="error") {
				console.log(" " + ip + j);
				console.log(result[j].status);
				$('#address').append('<option value="' + ip + j + '">' + ip + j + '</option>');
			};
		};
	};
	},10000);
}		