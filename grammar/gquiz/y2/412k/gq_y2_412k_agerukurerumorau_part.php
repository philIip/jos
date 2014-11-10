<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Grammar Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 10;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=777;
		
		
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> 文法 (Grammar)- 練習 </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">Giving (あげる／くれる) Receiving (もらう) senences:  Particles</div>
<div class="quizlistLine"><a href="../../../../gquiz.php">Return
    to Practice Quizzes list page</a></div> 
<p align="left" class="instructionLine"> "Choose the correct particle(s) for each sentence   </p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;Aさん 
	<INPUT name="answer" type="text" onChange="checkAnswer('は_が',this.value,0)" style="width: 25px;">
	</INPUT> Bさん 
	<INPUT name="answer" type="text" onChange="checkAnswer('に',this.value,1)" style="width: 25px;">
	</INPUT> プレゼントをあげました。
	<div class="symbols">
    <IMG SRC="../../../gimages/blank.gif">
    <IMG SRC="../../../gimages/blank.gif">
    </div>
	<p class="translationLine">A gave B a present.</p></div>



	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;Cさん
	<INPUT name="answer" type="text" onChange="checkAnswer('は_が',this.value,2)" style="width: 25px;">
    </INPUT>コーヒーをくれました。
	<div class="symbols">
	<IMG SRC="../../../gimages/blank.gif">
    </div>
	<p class="translationLine">C gave me a cup of coffee.</p></div>



	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;ともだち
	<INPUT name="answer" type="text" onChange="checkAnswer('に',this.value,3)" style="width: 25px;">
    </INPUT>アイスクリームをあげました。
	<div class="symbols">
    <IMG SRC="../../../gimages/blank.gif">
    </div>
	<p class="translationLine">I gave my friend an ice cream (cone).</p></div>




	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;ミミさん
	<INPUT name="answer" type="text" onChange="checkAnswer('に_から',this.value,4)" style="width: 25px;">
    </INPUT>ラップトップ・コンピューター
	<INPUT name="answer" type="text" onChange="checkAnswer('を',this.value,5)" style="width: 25px;">
	</INPUT> もらいました。
	<div class="symbols">
    <IMG SRC="../../../gimages/blank.gif">
    <IMG SRC="../../../gimages/blank.gif">
    </div>
	<p class="translationLine">I received a laptop computer from Mimi.</p></div>




	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;私
	<INPUT name="answer" type="text" onChange="checkAnswer('は_が',this.value,6)" style="width: 25px;">
    </INPUT>ぶどう
	<INPUT name="answer" type="text" onChange="checkAnswer('を',this.value,7)" style="width: 25px;">
	</INPUT> もらいました。
	<div class="symbols">
    <IMG SRC="../../../gimages/blank.gif">
    <IMG SRC="../../../gimages/blank.gif">
    </div>
	<p class="translationLine">I received grapes from B.</p></div>



	
	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;Bさん 
	<INPUT name="answer" type="text" onChange="checkAnswer('に',this.value,8)" style="width: 25px;">
	</INPUT> 私 
	<INPUT name="answer" type="text" onChange="checkAnswer('は_が',this.value,9)" style="width: 25px;">
	</INPUT> プレゼントをあげました。
	<div class="symbols">
    <IMG SRC="../../../gimages/blank.gif">
    <IMG SRC="../../../gimages/blank.gif">
    </div>
	<p class="translationLine">I gave B a present.</p></div>




	
	
	
	
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
