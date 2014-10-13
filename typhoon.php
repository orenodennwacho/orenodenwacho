<?php
require_once('common.php');


html_header('台風被災時の対応フロー','flow'); 
//	データのロード
	$filename = str_replace ( "@" , "at" , "tominari@neskk.co.jp");                                                                            
	$loaddata = unserialize(file_get_contents( "data/".$filename."dat"));
/*
  echo'<pre>';var_dump($loaddata);echo'</pre>';
	echo $loaddata[2]["ooya"];
*/

?>
<article>

	<header>
		<h1 class="orange">台風被災時の対応フロー<br>
		<small>〜この順番で連絡を行って下さい〜</small></h1>
	</header>
	
	<section>
		<h2>1. 今いる場所は適切ですか？。</h2>
		<p>まずい場合は緊急避難先に連絡して下さい。</p>
		
		<p class="tel"><?php echo $loaddata[3]['hinan'];?></p>
		
		<button class="next">Next</button>
	</section>
	
	<section>
		<h2>2. 怪我はありませんか？。</h2>
		<p>怪我がありましたら緊急外来に連絡して下さい。</p>
		
		<p class="tel"><?php echo $loaddata[1]['geka'];?></p>
		
		<button class="prev">Prev</button>
		<button class="next">Next</button>
	</section>
	
	<section>
		<h2>3. 大家さんに連絡しましょう。</h2>
		<p>家の状態を伝えて下さい。</p>
		
		<p class="tel"><?php echo $loaddata[2]['ooya'];?></p>
		
		<button class="prev">Prev</button>
		<button class="next">Next</button>
	</section>
	
	<section>
		<h2>4. 自分の無事を連絡しましょう。</h2>
		<p>親、友人、親戚に連絡しましょう。</p>
		
		<p class="tel"><?php echo $loaddata[4]['renraku'];?></p>
		
		<button class="prev">Prev</button>
		<button class="next">Next</button>
	</section>
	
	<section>
		<h2>5. ご自宅に老人はいますか？。</h2>
		<p>ヘルパーさんに連絡しましょう。</p>
		
		<p class="tel"><?php echo $loaddata[5]['helper'];?></p>
		
		<button class="prev">Prev</button>
		<button class="next">Next</button>
	</section>
	
	<section>
		<h2>6. お子さんはいますか？</h2>
		<p>小学校・幼稚園に連絡しましょう。</p>
		
		<p class="tel"><?php echo $loaddata[6]['school'];?></p>
		
		<button class="prev">Prev</button>
		<button class="next">Next</button>
	</section>

    <section>
		<h2>7. 家の保険を確認しましょう。</h2>
		<p>保険やさんに連絡しましょう</p>
		
		<p class="tel"><?php echo $loaddata[0]['ie_hoken'];?></p>
		
		<button class="prev">Prev</button>
	</section>

	<nav>
		<ul>
			<li><a href="/flow.php">&lt;&lt; 戻る</a></li>
		</ul>
	</nav>
</article>
<?php html_footer();
