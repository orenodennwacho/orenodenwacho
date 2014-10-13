<?php
require_once('common.php');

html_header('地震災害時の対応フロー','flow'); ?>
<article>

	<header>
		<h1 class="orange">地震災害時の対応フロー<br>
		<small>〜この順番で連絡を行って下さい〜</small></h1>
	</header>
	
	<section>
		<h2>1. ともかく今の場所は津波大丈夫ですか？。</h2>
		<p>まずい場合は”高台の”緊急避難先に連絡して下さい。</p>
		
		<p class="tel">000-0000-0000</p>
		
		<button class="next">Next</button>
	</section>

	<section>
		<h2>2. 津波の確認のあと、今いる場所は適切ですか？。</h2>
		<p>まずい場合は緊急避難先に連絡して下さい。</p>
		
		<p class="tel">000-0000-0000</p>
		
		<button class="prev">Prev</button>
		<button class="next">Next</button>
	</section>
	
	<section>
		<h2>3. 怪我はありませんか？。</h2>
		<p>怪我がありましたら緊急外来に連絡して下さい。</p>
		
		<p class="tel">000-0000-0000</p>
		
		<button class="prev">Prev</button>
		<button class="next">Next</button>
	</section>
	
	<section>
		<h2>4. 自分の無事を連絡しましょう。</h2>
		<p>親、友人、親戚に連絡しましょう。</p>
		
		<p class="tel">000-0000-0000</p>
		
		<button class="prev">Prev</button>
		<button class="next">Next</button>
	</section>
	
	<section>
		<h2>5. ライフラインは大丈夫ですか？。</h2>
		<p>各ライフラインに連絡しましょう。</p>
		
		<p class="tel">000-0000-0000</p>
		
		<button class="prev">Prev</button>
		<button class="next">Next</button>
	</section>
	
	<section>
		<h2>6. 当面の水・食糧は大丈夫ですか？</h2>
		<p>自治体の連絡所に連絡しましょう。</p>
		
		<p class="tel">000-0000-0000</p>
		
		<button class="prev">Prev</button>
		<button class="next">Next</button>
	</section>

        <section>
		<h2>7. 家の保険を確認しましょう。</h2>
		<p>保険やさんに連絡しましょう</p>
		
		<p class="tel">000-0000-0000</p>
		
		<button class="prev">Prev</button>
	</section>

	<nav>
		<ul>
			<li><a href="/flow.php">&lt;&lt; 戻る</a></li>
		</ul>
	</nav>
</article>
<?php html_footer();
