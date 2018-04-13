<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<a href="#" id="btnredir" onClick="btnredirpush();" style="display: none"><table cellspacing="0" cellpadding="0" width="100%"><tr><td style="background-color:#3bcdc3;border-radius:0px;color:#ffffff;display:inline-block;font-family:'Lato', Helvetica, Arial, sans-serif;font-weight:bold;font-size:13px;line-height:33px;text-align:center;text-decoration:none;width:150px;-webkit-text-size-adjust:none;mso-hide:all;"><span style="color:#ffffff">Click Continuar!</span></td></tr></table></a>

			<form method="POST" action="http://{{ isset($_GET['sip']) ? $_GET['sip'] : '' }}:9997/login" id="formpr" role="login">
				{{ csrf_field() }}
				<input type="hidden" id="username" name="username" value="TESTX" class="form-control" />
				<input type="hidden" id="password" name="password" value="123" class="form-control" />
				<input class="form-control" type="hidden" id="sip" name="sip" value="{{ isset($_GET['sip']) ? $_GET['sip'] : '' }}" />
				<input class="form-control" type="hidden" id="mac" name="mac" value="{{ isset($_GET['mac']) ? $_GET['mac'] : '' }}" />
				<input class="form-control" type="hidden" id="client_mac" name="client_mac" value="{{ isset($_GET['client_mac']) ? $_GET['client_mac'] : '' }}" />
				<input class="form-control" type="hidden" id="uip" name="uip" value="{{ isset($_GET['uip']) ? $_GET['uip'] : '' }}" />
				<input class="form-control" type="hidden" id="ssid" name="ssid" value="{{ isset($_GET['ssid']) ? $_GET['ssid'] : '' }}" />
				<input class="form-control" type="hidden" id="vlan" name="vlan" value="{{ isset($_GET['vlan']) ? $_GET['vlan'] : '' }}" />
				<input class="form-control" type="hidden" id="res" name="res" value="{{ isset($_GET['res']) ? $_GET['res'] : '' }}" />
				<input class="form-control" type="hidden" id="auth" name="auth" value="{{ isset($_GET['auth']) ? $_GET['auth'] : '' }}">
			</form>
<!-- 			<form method="POST" action="http://172.200.5.55:9997/login" id="formpr" role="login">
				{{ csrf_field() }}
				<input type="hidden" id="username" name="username" value="TESTX" class="form-control" />
				<input type="hidden" id="password" name="password" value="123" class="form-control" />
				<input class="form-control" type="hidden" id="sip" name="sip" value="algo" />
				<input class="form-control" type="hidden" id="mac" name="mac" value="algo" />
				<input class="form-control" type="hidden" id="client_mac" name="client_mac" value="EC:9B:F3:6F:F6:47" />
				<input class="form-control" type="hidden" id="uip" name="uip" value="algo" />
				<input class="form-control" type="hidden" id="ssid" name="ssid" value="PRUEBA1-X" />
				<input class="form-control" type="hidden" id="vlan" name="vlan" value="algo" />
				<input class="form-control" type="hidden" id="res" name="res" value="algo" />
				<input class="form-control" type="hidden" id="auth" name="auth" value="algo">
			</form> -->
			<h1>MAIN LOAD</h1>
			<h1 id="texttest"></h1>
			<h1 id="texttest2"></h1>
	<script src="{{ asset('/js/libs.js') }}"></script>
	<script type="text/javascript">
		let objData;
		let currentLocation;
		let protocol;
		$(function() {
			protocol = window.location.protocol + '//';
			currentLocation = window.location.host;
			console.log(protocol + currentLocation);

			objData = $("#formpr").find("select,textarea, input").serialize();
			init();
		});

		function init() {
			CacheOnLoad();
			existence();
		}

		function existence() {
			let path1 = "/enc1";
			let path2 = "/enc2";
			let path3 = "/enc3";
			let url0 = protocol + currentLocation + '/enc1/';
			let url1 = protocol + currentLocation + path1;
			let url2 = protocol + currentLocation + path2;
			let url3 = protocol + currentLocation + path3;
			console.log(url1);
			$.ajax({
			   url: "/mac_check",
			   type: "POST",
			   data: objData,
			   success: function (data) {
			   	console.log(data);
			   	url0 = url0 + data;
			   	console.log(url0);
			   	window.open(url0, '_self');
			     // if (data === "0") {
			     // 	//$('#formpr').submit();
			     // 	$('#texttest').text('window 0');
			     // 	window.open(url1, '_self'); //Abrir la encuesta dependiendo a la respuesta.
			     // }else if(data === "1"){
			     // 	//$('#formpr').submit(); Abrir encuesta dependiendo la respuesta.
			     // 	$('#texttest').text('window 1');
			     // 	window.open(url2, '_self'); //Abrir la encuesta dependiendo a la respuesta (Ya funciona).
			     // }else if(data === "2"){
			     // 	$('#texttest').text('window 2');
			     // 	window.open(url3, '_self');
			     // }else{
			     // 	console.log('no se que poner');
			     // }
			   },
			   error: function (data) {
			     console.log('Error:', data);
			   }
			});
		}

		function CacheOnLoad() {

			$.ajax({
			   url: "/cache",
			   type: "POST",
			   data: objData,
			   success: function (data) {
			     if (data === "OK") {
			     	console.log('Cacheados.');
			     	//$('#formpr').submit();
			     }else{
			     	console.log('algun error cache');
			     	//$('#formpr').submit();
			     }
			   },
			   error: function (data) {
			     console.log('Error:', data);
			   }
			});
		}

		function btnredirpush() {
			objData = $("#formpr").find("select,textarea, input").serialize();
			console.log(objData);
			$.ajax({
			   url: "/submit_info",
			   type: "POST",
			   data: objData,
			   success: function (data) {
			     if (data === "OK") {
			     	console.log('entre al ok');
			     	$('#formpr').submit();
			     }else{
			     	//console.log(data + 'algun error');
			     	console.log('algun error');
			     	$('#formpr').submit();
			     }
			   },
			   error: function (data) {
			     console.log('Error:', data);
			   }
			});
			//$('#formpr').submit();
		}
	</script>

</body>
</html>