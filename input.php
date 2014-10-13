<?php
require_once('common.php');
html_header('備えあれば憂いなし 〜オレの電話帳〜'); 

if(isset($_POST["ie_hoken"])) {
	$v = array();

	array_push($v, array('ie_hoken'=>$_POST["ie_hoken"]));
	array_push($v, array('geka'=>$_POST["geka"]));
	array_push($v, array('ooya'=>$_POST["ooya"]));
	array_push($v, array('hinan'=>$_POST['hinan']));
	array_push($v, array('renraku'=>$_POST["renraku"]));
	array_push($v, array('helper'=>$_POST["helper"]));
	array_push($v, array('school'=>$_POST["school"]));

	$filename = str_replace ( "@" , "at" , "tominari@neskk.co.jp");
	file_put_contents("data/".$filename."dat", serialize($v));
}
else {
}
?>
<form method="post" action="input.php" name="oreden">
<article>

	<header>
		<h1 class="blue">連絡先チェックリスト<br>
		<small>〜キミの備えを振り返ろう〜</small></h1>
	</header>
	
	<section>
	
		<table><tbody>
			<tr>
				<th><input type="checkbox"> 家の保険</th>
				<td><input type="text" name="ie_hoken" placeholder="電話番号"></td>
			</tr>
			<tr>
				<th><input type="checkbox"> 緊急の外科外来</th>
				<td><input type="text" name="geka" placeholder="電話番号"></td>
			</tr>
			<tr>
				<th><input type="checkbox"> マンション管理会社・大家さん</th>
				<td><input type="text" name="ooya" placeholder="電話番号"></td>
			</tr>
			<tr>
				<th><input type="checkbox"> 避難場所</th>
				<td><input type="text" name="hinan" placeholder="住所"></td>
			</tr>
			<tr>
				<th><input type="checkbox"> 親・友人・親戚の連絡先</th>
				<td><input type="text" name="renraku" placeholder="電話番号"></td>
			</tr>
			<tr>
				<th><input type="checkbox"> 老人ヘルパーの避難先</th>
				<td><input type="text" name="helper" placeholder="電話番号"></td>
			</tr>
			<tr>
				<th><input type="checkbox"> 小学校・幼稚園への連絡先</th>
				<td><input type="text" name="school" placeholder="電話番号"></td>
			</tr>
		</tbody></table>

		<input type="submit" value="登録">
	
	</section>
	<nav>
		<ul>
			<li><a href="/">&lt;&lt; 戻る</a></li>
		</ul>
	</nav>

</article>
</form>
<?php html_footer();
