<?php
require_once('common.php');

html_header('備えあれば憂いなし 〜オレの電話帳〜'); ?>
<article>

	<header>
		<h1 class="gray">備えあれば憂いなし<br>
		<small>〜オレの電話帳〜</small><br>
		Prototype</h1>
	</header>
	
	<section>
		<form action="index.php">
			<h2>貴方はだ〜れ？</h2>
			<p><input type="mailaddress" placeholder="mail@example.com"><button class="login">ログイン</button></p>
		</form>
	</section>
	
	<section>
		<h2><a href="input.php">備えチェックリスト</a></h2>
		<p>貴方の備えは大丈夫？チェックリスト形式に備えを見直し、連絡先を登録しよう。</p>
	</section>
	
	<section>
		<h2><a href="flow.php">何が起こりましたか!?</a></h2>
		<p>備えたチェックリストを元に連絡先を提案します。</p>
	</section>
	
</article>
<?php html_footer();
