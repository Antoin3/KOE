function scan(host){
	var ip = host.replace(host.substring(host.lastIndexOf(".")),".");
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