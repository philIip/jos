<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Counter Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 11;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=421;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../js/quiz_top_co.js"></SCRIPT>

<LINK href="../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">


<h2 class="titleText" align="center"> カウンタークイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">



<div class="innerTitle">〜台(だい)<font size=4>: Counting machinery: computers, office equipment, vehicles, etc.</font></div>
<div class="quizlistLine"><a href="../../counters.php">Return
  to Counter page</a></div>  
<p class="instructionLine"> Count cars with 〜だい in Hiragana.</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b><div style="background:url('../cougames/concimages/car1.gif') center center no-repeat; width:290px; height:45px;  margin:0 20px; display:inline-block;"></div> 
	  <INPUT name="answer" type="text" onChange="checkAnswer('いちだい',this.value,0)" style="width: 75px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b><div style="background:url('../cougames/concimages/cars5.gif') center center no-repeat; width:290px; height:45px;  margin:0 20px; display:inline-block;"></div>  
    <INPUT name="answer" type="text" onChange="checkAnswer('ごだい',this.value,1)" style="width: 75px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b><div style="background:url('../cougames/concimages/cars9.gif') center center no-repeat; width:290px; height:90px;  margin:0 20px; display:inline-block;"></div> 
      <INPUT name="answer" type="text" onChange="checkAnswer('きゅうだい',this.value,2)" style="width: 75px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b><div style="background:url('../cougames/concimages/cars10.gif') center center no-repeat; width:280px; height:90px;  margin:0 20px; display:inline-block;"></div> 
	  <INPUT name="answer" type="text" onChange="checkAnswer('じゅうだい',this.value,3)" style="width: 75px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>
	
    
    <! Question 5>
	<div class="questionLineOdd"><b>5. </b><div style="background:url('../cougames/concimages/cars3.gif') center center no-repeat; width:290px; height:45px;  margin:0 20px; display:inline-block;"></div>
<INPUT name="answer" type="text" onChange="checkAnswer('さんだい',this.value,4)" style="width: 75px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b><div style="background:url('../cougames/concimages/cars4.gif') center center no-repeat; width:290px; height:45px;  margin:0 20px; display:inline-block;"></div>
<INPUT name="answer" type="text" onChange="checkAnswer('よんだい',this.value,5)" style="width: 75px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b><div style="background:url('../cougames/concimages/cars8.gif') center center no-repeat; width:290px; height:90px;  margin:0 20px; display:inline-block;"></div>
	  <INPUT name="answer" type="text" onChange="checkAnswer('はちだい',this.value,6)" style="width: 75px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b><div style="background:url('../cougames/concimages/cars2.gif') center center no-repeat; width:280px; height:75px;  margin:0 20px; display:inline-block;"></div>
<INPUT name="answer" type="text" onChange="checkAnswer('にだい',this.value,7)" style="width: 75px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b><div style="background:url('../cougames/concimages/cars7.gif') center center no-repeat; width:290px; height:90px;  margin:0 20px; display:inline-block;"></div>
<INPUT name="answer" type="text" onChange="checkAnswer('ななだい_しちだい',this.value,8)" style="width: 75px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 10>
	<div class="questionLineEven"><b>10. </b><div style="background:url('../cougames/concimages/cars6.gif') center center no-repeat; width:290px; height:90px;  margin:0 20px; display:inline-block;"></div>
<INPUT name="answer" type="text" onChange="checkAnswer('ろくだい',this.value,9)" style="width: 75px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 11>
	<div class="questionLineOdd"><b>11. </b>&nbsp;&nbsp;how many (cars): 
	  <INPUT name="answer" type="text" onChange="checkAnswer('なんだい',this.value,10)" style="width: 75px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	

	

</FORM>
<div id="score"></div>

<div>
<table class="optionBox"><tr>
	<td><BUTTON onClick="checkAnswers()">Check Answers</BUTTON></td>
	<td><BUTTON onClick="resetValues()">Reset Values</BUTTON></td>
</tr></table>
</div>
</div>

</body>
</html>
