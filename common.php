<?php


/**
 * html header output
 * @param title タイトル要素に表示する
 */
function html_header( $title, $class='body' ){
	
	$html = <<<EOL
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<title>{$title}</title>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body class="{$class}">
EOL;

	echo $html;
	
}

/**
 * html footer output
 * @param 
 */
function html_footer( ){
	$html = <<<EOL
<footer>
	<p>※現段階では個人情報保護は特に行っていません、自己責任でご使用下さい。(そのうち解決予定)</p>
	<p><small>&copy; Hack4Japan, SakaiYuya, TominariTakayuki, OgawaNobuhiro</small></p>
</footer>
</body>
</html>
EOL;

	echo $html;

}


