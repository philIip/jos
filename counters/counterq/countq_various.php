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
		var q_id=422;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../js/quiz_top_co.js"></SCRIPT>

<LINK href="../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">


<h2 class="titleText" align="center"> カウンタークイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">



<div class="innerTitle">いろいろなカンター: Counting different things</div>
<div class="quizlistLine"><a href="../../counters.php">Return
  to Counter page</a></div>  
<p class="instructionLine"> Count the folloing things in Hiragana.<br>
(e.g.,)<br>
<span style="background:url('../cougames/concimages/3cats.gif') center center no-repeat; width:106px; height:88px; border:0px solid #444; margin:0 20px; display:inline-block;"></span>
 &nbsp;&nbsp;さんびき<br><br>
 
<span style="background:url('../cougames/concimages/2candies.gif') center center no-repeat; width:104px; height:91px; border:0px solid #444; margin:0 20px; display:inline-block;"></span>
 &nbsp;&nbsp;にこ

</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b><div style="background:url('../cougames/concimages/candy1.gif') center center no-repeat; width:50px; height:60px;  margin:0 20px; display:inline-block;"></div> 
	  <INPUT name="answer" type="text" onChange="checkAnswer('ひとつ_いっこ',this.value,0)" style="width: 75px;">
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
	<div class="questionLineOdd"><b>3. </b><div style="background:url('../cougames/concimages/cats9.gif') center center no-repeat; width:300px; height:90px;  margin:0 20px; display:inline-block;"></div> 
      <INPUT name="answer" type="text" onChange="checkAnswer('きゅうひき',this.value,2)" style="width: 75px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b><div style="background:url('../cougames/concimages/books10.gif') center center no-repeat; width:280px; height:150px;  margin:0 20px; display:inline-block;"></div> 
	  <INPUT name="answer" type="text" onChange="checkAnswer('じゅっさつ',this.value,3)" style="width: 75px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>
	
    
    <! Question 5>
	<div class="questionLineOdd"><b>5. </b><div style="background:url('../cougames/concimages/houses3.gif') center center no-repeat; width:250px; height:55px;  margin:0 20px; display:inline-block;"></div>
<INPUT name="answer" type="text" onChange="checkAnswer('さんけん_さんげん',this.value,4)" style="width: 75px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b><div style="background:url('../cougames/concimages/pens4.gif') center center no-repeat; width:280px; height:60px;  margin:0 20px; display:inline-block;"></div>
<INPUT name="answer" type="text" onChange="checkAnswer('よんほん',this.value,5)" style="width: 75px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b><div style="background:url('../cougames/concimages/ringo8.gif') center center no-repeat; width:200px; height:120px;  margin:0 20px; display:inline-block;"></div>
	  <INPUT name="answer" type="text" onChange="checkAnswer('はっこ_やっつ',this.value,6)" style="width: 75px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b><div style="background:url('../cougames/concimages/people2.gif') center center no-repeat; width:200px; height:60px;  margin:0 20px; display:inline-block;"></div>
<INPUT name="answer" type="text" onChange="checkAnswer('ふたり',this.value,7)" style="width: 75px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b><div style="background:url('../cougames/concimages/tickets7.gif') center center no-repeat; width:300px; height:120px;  margin:0 20px; display:inline-block;"></div>
<INPUT name="answer" type="text" onChange="checkAnswer('ななまい_しちまい',this.value,8)" style="width: 75px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 10>
	<div class="questionLineEven"><b>10. </b><div style="background:url('../cougames/concimages/wine6.gif') center center no-repeat; width:200px; height:120px;  margin:0 20px; display:inline-block;"></div>
<INPUT name="answer" type="text" onChange="checkAnswer('ろっぱい_ろくはい',this.value,9)" style="width: 75px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 11>
	<div class="questionLineOdd"><b>11. </b><div style="background:url('../cougames/concimages/people6.gif') center center no-repeat; width:200px; height:120px;  margin:0 20px; display:inline-block;"></div>
<INPUT name="answer" type="text" onChange="checkAnswer('ろくにん',this.value,10)" style="width: 75px;">
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
