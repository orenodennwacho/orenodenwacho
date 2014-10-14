<?php
require_once('common.php');

html_header('何が起こりましたか? 〜シチュエーションに合わせてお答えします〜'); ?>
<article>

	<header>
		<h1 class="orange">何が起こりましたか?<br>
		<small>〜シチュエーションに合わせてお答えします〜</small></h1>
	</header>
	
	<section>
		<ul>
			<li><a href="typhoon.php">台風で床上浸水しました</a></li>
			<li><a href="earthquake.php">地震で家が半壊しました</a></li>
			<li>火事で家が焼けました</li>
			<li>交通事故でケガをしました</li>
		</ul>
	
	</section>

	<nav>
		<ul>
			<li><a href="index.php">&lt;&lt; 戻る</a></li>
		</ul>
	</nav>
</article>
<?php html_footer();
