<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Privacy Policy creation form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.0/clipboard.min.js"></script>
	
	<style>
		.container { padding: 50px 0; }
	</style>
</head>
<body>

<h1 style="text-align: center; ">VQDEV Privacy Policy Generator</h1>

	<div ng-app="">

		<div class="container">
		
			<form>
				Company Name: <input type="text" ng-model="compname">
			</form>
			
			<button type="button" class="btn btn-primary priv-btn"  onclick="generate_priv()" data-clipboard-target="#privacy-policy">Copy to clipboard</button>
	  
			<div id="privacy-policy">
				<h1>{{compname}} Privacy Policy</h1>
				<p>{{compname}} takes your privacy seriously. This policy page is to inform you of the personal information we gather, and how we use, store and protect it.</p>

				<h2>Data We Collect</h2>
				<p>In order to track the usage habits of our visitors, we collect data such as your IP address, 
				your ISP (internet service provider), your web browser, the time you visited the site, and which pages you viewed during your visit. 
				Except for the information you submit to {{compname}}, we do not gather or store any information which can be used to identify you personally 
				(such as your name, email address, physical address, telephone number, bank account number or credit card numbers).</p>

				<h2>Web Cookies</h2>
				<p>We use cookies to store certain visitor information, such as user display preferences, and to provide the ability to log in to certain areas of the site.</p>

				<p><h2>Advertising Cookies</h2>
				<p>At times, we may use advertising programs to help support the running of this site. These companies use cookies to serve advertisements on this site.</p>

				<h2>Third Parties</h2>
				<p>We do not sell any information you submit to third parties.</p>
				<br>
				<p>Thank you for visiting {{compname}}!</p>
			</div>
		</div> <!-- end container -->
	</div>
	
	<script>
		function generate_priv() {
			new Clipboard('.priv-btn');
		}
	</script>

</body>
</html>