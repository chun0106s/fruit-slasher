<! DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>英語力診断</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/reset.css>"
</head>
<body>
	<header>
		<div class="inner">
			<h1>英語力診断</h1>
		</div>
	</header><!-- end of header -->
		
	<div id="contents">
		<div class="inner">
			<h2 style="text-align:left;">質問に回答して下さい。</h2>
			
			<form method="post" action="result.php">
			<div id="questionaire">
				<div class="question">
					<p>問題１　次の単語の意味を答えよ。<br />apple</p>
					<p><input type="radio" name="q1" value="a">りんご<br />
					<input type="radio" name="q1" value="b">みかん<br />
					<input type="radio" name="q1" value="c">梨</p>
					
					<p>問題２　次の単語の意味を答えよ。<br />giraffe</p>
					<p><input type="radio" name="q2" value="a">象<br />
					<input type="radio" name="q2" value="b">キリン<br />
					<input type="radio" name="q2" value="c">猿</p>
					
					<p>問題３　次の単語の意味を答えよ。<br />diameter</p>
					<p><input type="radio" name="q3" value="a">半径<br />
					<input type="radio" name="q3" value="b">直径<br />
					<input type="radio" name="q3" value="c">焦点</p>
					
					<p>問題４　次の単語の意味を答えよ。<br />Atlantic</p>
					<p><input type="radio" name="q4" value="a">太平洋の<br />
					<input type="radio" name="q4" value="b">大西洋の<br />
					<input type="radio" name="q4" value="c">南極の</p>
					
					<p>問題５　次の単語の意味を答えよ。<br />forensic</p>
					<p><input type="radio" name="q5" value="a">法定の<br />
					<input type="radio" name="q5" value="b">植物学の<br />
					<input type="radio" name="q5" value="c">人間工学の</p>
					
					<p style="text-align:center; margin-top: 60px;"><input type="submit" value="診断する" id="getAnswer"></input></p>
					
					<p id="answer">&nbsp;</p>
					
					
					
				</div>
			</div>
			</form>
		</div>	
	</div>	
	
	<footer>
		<address>
			Copyright &copy; 2012 Kyodo News Digital Co., Ltd. All Rights Reserved.
		</address>
	</footer>
	<!--
	<script type="text/javascript">
	
	var mondai = new Array("q1","q2","q3","q4","q5");
	var answer = new Array("","","","","");
	
	document.getElementById("getAnswer").onclick = function(){

	for(var i=0; i<mondai.length; i++){
	var radioList = document.getElementsByName(mondai[i]);
		answer[i] = "選択されていません";
		for(var j=0; j<radioList.length; j++){
			if (radioList[j].checked) {
				answer[i] = "第" + (i+1) + "問目は「" + radioList[j].value + "」が選択されています";
				break;
				}
		}
		
	}
		document.getElementById("answer").innerHTML = answer[0] + "<br />" + answer[1] + "<br />" + answer[2] + "<br />" + answer[3] + "<br />" + answer[4] + "<br />";
	}


	</script>	
	-->
</body>
</html>
