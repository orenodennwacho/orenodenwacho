<?php
require_once('common.php');

html_header('備えあれば憂いなし 〜オレの電話帳〜'); ?>
<article>

	<header>
		<h1 class="blue">連絡先チェックリスト<br>
		<small>〜キミの備えを振り返ろう〜</small></h1>
	</header>
	
	<section>
	
		<table><tbody>
			<tr>
				<th>家の保険</th>
				<td><input type="text" placeholder="telhoken"></td>
			</tr>
			<tr>
				<th>緊急の外科外来</th>
				<td><input type="text" placeholder="telgeka"></td>
			</tr>
			<tr>
				<th>マンション管理会社・大家さん</th>
				<td><input type="text" placeholder="telkanri"></td>
			</tr>
			<tr>
				<th>避難場所</th>
				<td><input type="text" placeholder="telhinan"></td>
			</tr>
			<tr>
				<th>親・友人・親戚の連絡先</th>
				<td><input type="text" placeholder="telhinan"></td>
			</tr>
			<tr>
				<th>老人ヘルパーの避難先</th>
				<td><input type="text" placeholder="telhelper"></td>
			</tr>
			<tr>
				<th>小学校・幼稚園への連絡先</th>
				<td><input type="text" placeholder="telgakkou"></td>
			</tr>
		</tbody></table>
	
	</section>

</article>
<?php html_footer();
