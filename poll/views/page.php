<?php
	return "<DOCTYPE html>
	<html>
		<head>
			<title>$pageData->title</title>
			<meta http-ecuiv='Content-Type' content='text/html; charset=utf-8'/>
			$pageData->css
			$pageData->embeddedStyle
		</head>
		<body>
			$pageData->content
			$pageData->scriptElements
		</body>
	</html>";
?>