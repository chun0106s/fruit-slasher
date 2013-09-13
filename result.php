<?php

$guest_answer = array(5);//問題が５問なので５を指定
$correct_answer = array("a","b","b","b","a");
$score = 0;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$guest_answer[0] = htmlspecialchars($_POST["q1"], ENT_QUOTES);
	$guest_answer[1] = htmlspecialchars($_POST["q2"], ENT_QUOTES);
	$guest_answer[2] = htmlspecialchars($_POST["q3"], ENT_QUOTES);
	$guest_answer[3] = htmlspecialchars($_POST["q4"], ENT_QUOTES);
	$guest_answer[4] = htmlspecialchars($_POST["q5"], ENT_QUOTES);
}else{
	exit(1);
}

	for($i=0;$i<count($correct_answer);$i++){
		if(strcmp($correct_answer[$i],$guest_answer[$i]) == 0){
			$score++;
		}
	}

?>



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
			<h2 style="text-align:left;">診断結果</h2>
			
			<div id="resultDisplay" style="height:200px;">
				<div class="result">
					
					<p style="font-size:150%;font-weight:bold; margin-top:50px;">
						<?php 
						
						if($score >=5){
							echo ($score . "問正解です。おみごと！");
						}else if($score >= 4){
							echo ($score . "問正解です。合格です。");
						}else{
							echo "不合格です。もっと頑張りましょう。";
						}
						
						
						
						?></p>
					
					
				</div>
			</div>
		</div>	
	</div>	
	
	<footer>
		<address>
			Copyright &copy; 2012 Kyodo News Digital Co., Ltd. All Rights Reserved.
		</address>
	</footer>
	
</body>
</html>
