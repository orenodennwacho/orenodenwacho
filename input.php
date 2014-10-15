<?php
	session_start();
	require_once('common.php');
	html_header('備えあれば憂いなし 〜オレの電話帳〜'); 

	if(!isset($_POST["ie_hoken"])) {
		$filename = str_replace ( "@" , "at" , $_SESSION["mailaddress"]);
  	$loaddata = unserialize(file_get_contents( "data/".$filename."dat"));

		if($loaddata == NULL) {
			$loaddata = array();
			$loaddata += array('ie_hoken'=>"");
			$loaddata += array('geka'=>"");
			$loaddata += array('ooya'=>"");
			$loaddata += array('hinan'=>"");
			$loaddata += array('renraku'=>"");
			$loaddata += array('helper'=>"");
			$loaddata += array('school'=>"");
		}
		
	} else {
		$loaddata = array();
		$loaddata += array('ie_hoken'=>$_POST["ie_hoken"]);
		$loaddata += array('geka'=>$_POST["geka"]);
		$loaddata += array('ooya'=>$_POST["ooya"]);
		$loaddata += array('hinan'=>$_POST["hinan"]);
		$loaddata += array('renraku'=>$_POST["renraku"]);
		$loaddata += array('helper'=>$_POST["helper"]);
		$loaddata += array('school'=>$_POST["school"]);

		$filename = str_replace ( "@" , "at" , $_SESSION["mailaddress"]);
		file_put_contents("data/".$filename."dat", serialize($loaddata));
	}

	/**
	 * チェックするかどうか判断
	 * @param value 文字列
	 */
	function ifcheck( $value ){
		if( $value != NULL ){
			echo('checked="checked"');
		} else {
			return;
		}
	}

?>

<form method="post" action="input.php" name="oreden">
<article>

	<header>
		<small><?php $_SESSION["mailaddress"] ?></small></h1>
		<h1 class="blue">連絡先チェックリスト<br>
		<small>〜キミの備えを振り返ろう〜</small></h1>
	</header>
	
	<section class="checklist">
	
		<table><tbody>
			<tr>
				<th><input type="checkbox" <?php ifcheck($loaddata["ie_hoken"]); ?>> 家の保険</th>
				<?php
					echo '<td><input type="text" name="ie_hoken" placeholder="電話番号" value='.$loaddata["ie_hoken"].'></td>';
				?>
			</tr>
			<tr>
				<th><input type="checkbox" <?php ifcheck($loaddata["geka"]); ?>> 緊急の外科外来</th>
				<?php
					echo '<td><input type="text" name="geka" placeholder="電話番号" value='.$loaddata["geka"].'></td>';
				?>
			</tr>
			<tr>
				<th><input type="checkbox" <?php ifcheck($loaddata["ooya"]); ?>> マンション管理会社・大家さん</th>
				<?php
					echo '<td><input type="text" name="ooya" placeholder="電話番号" value='.$loaddata["ooya"].'></td>';
				?>
			</tr>
			<tr>
				<th><input type="checkbox" <?php ifcheck($loaddata["hinan"]); ?>> 避難場所</th>
				<?php
					echo '<td><input type="text" name="hinan" placeholder="住所" value='.$loaddata["hinan"].'></td>';
				?>
			</tr>
			<tr>
				<th><input type="checkbox" <?php ifcheck($loaddata["renraku"]); ?>> 親・友人・親戚の連絡先</th>
				<?php
					echo '<td><input type="text" name="renraku" placeholder="電話番号" value='.$loaddata["renraku"].'></td>';
				?>
			</tr>
			<tr>
				<th><input type="checkbox" <?php ifcheck($loaddata["helper"]); ?>> 老人ヘルパーの避難先</th>
				<?php
					echo '<td><input type="text" name="helper" placeholder="電話番号" value='.$loaddata["helper"].'></td>';
				?>
			</tr>
			<tr>
				<th><input type="checkbox" <?php ifcheck($loaddata["school"]); ?>> 小学校・幼稚園への連絡先</th>
				<?php
					echo '<td><input type="text" name="school" placeholder="電話番号" value='.$loaddata["school"].'></td>';
				?>
			</tr>
		</tbody></table>
		
		<p id="centering">チェック出来た数:<strong id="count"></strong></p>
		
		<input type="submit" value="登録">
	
	</section>
	<nav>
		<ul>
			<li><a href="index.php">&lt;&lt; 戻る</a></li>
		</ul>
	</nav>

</article>
</form>
<?php html_footer();
