<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $blog["name"]; ?></title>
		
		<meta charset="utf-8" />
		<meta name="description" content="<?php echo $blog["description"]; ?>" />
		<meta name="keywords" content="<?php
			$keywords = array();

			foreach(explode(" ", $blog["name"]) as $word) {
				$keywords[] = $word;
			}

			foreach(explode(" ", $blog["description"]) as $word) {
				$keywords[] = $word;
			}

			foreach($keywords as $word) {
				echo strtolower($word);
				echo ", ";
			}
		?>" />

		<?php
			function css($filename) {
				$buffer = file_get_contents($filename);
		
				$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
				// Remove space after colons
				$buffer = str_replace(': ', ':', $buffer);
				// Remove whitespace
				$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
				echo($buffer);
			}

			function js($filename) {
				$buffer = file_get_contents($filename);

				$buffer = str_replace("\n", "", $buffer);
				echo $buffer;
			}
		?>
	
		<style><?php css("css/normalize.css"); ?></style>
		<style><?php css("css/style.css"); ?></style>

		<script><?php js("js/jquery-1.11.1.min.js"); ?></script>
		<script><?php js("js/jquery.fittext.min.js"); ?></script>
		<script><?php js("js/script.js"); ?></script>

	</head>
	<body>

