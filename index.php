<html>
<head>
	<title>Test php localize</title>
	<?php include_once("php.localize.class.inc.php");?>
</head>

<body>
		
	<?php
	
	$local_it = new Localize("it");
	print $local_it->get("Hello, world!");
	
	?>
	
	<br/>
	
	<?php
	
	$local_fr = new Localize("fr");
	print $local_fr->get("Hello, world!");
	
	?>
	
	<br/>
	
	<?php
	
	$local_de = new Localize("de");
	print $local_de->get("Hello, world!");
	
	?>
	
	<br/>
	
	<?php
	
	$local_es = new Localize("es");
	print $local_es->get("Hello, world!");
	
	?>
	
	<br/>
	
	<?php
	
	$local_unknown = new Localize("unknown");
	print $local_unknown->get("Hello, world!");
	
	?>
	
	

	
</body>

</html>