<?php

// Martin Robertson, 20210930
// mansionhouseprojects@gmail.com

?>

<html>
<head>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>

<body>
	<div id='inspection'>
<!--
	this may not be the nicest UI, but does automatically number the data items, allowing clear result verification
-->
		<ol id='items'></ol>
	</div>

	<script>
		$(document).ready(function() {
			$.getJSON( "data.xhr.php", function( data ) {
				$.each( data, function( key, val ) {
					//console.log(val);
					$('#items').append(val);
					// if the JSON resultset was purely data (per example in data.xhr.php) 
					//$('#items').append("<li><span style='background-color:"+val.colour+"'>"+val.copy+"</span></li>");
				});
			});			
		});
	</script>
</body>
</html>

<?php

?>