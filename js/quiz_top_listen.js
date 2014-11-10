<!-- created by Fred Bickerstaff --> 

				
		var results = new Array(numQuestions);
		var touched = new Array(numQuestions);
		

		function remove_jw_images(){
			var m_img = [];
			var doc_images = document.images;
			for( var i = 0; i < doc_images.length; i++) {  
			 	if ( doc_images[i].classList.length == 0 ){
			 		m_img.push(doc_images[i]);
				}
			}

			return m_img;
		}


		function checkAnswer(rightChar,testChar,i) {
			if(!touched[i]) numAnswered++;
			
			if(rightChar.indexOf('_')) {
				var rightOption = new Array();
				rightOption = rightChar.split('_');
			}
			
		   if(testChar == rightChar || testChar == rightOption[0] || testChar == rightOption[1] || testChar == rightOption[2] || testChar == rightOption[3]) {
				//alert('???????????' );
				results[i] = true;
		   }
		   else {
				results[i] = false;
			}
			
			touched[i] = true;
		}
		
		function calcNumCorrect() {
			numCorrect = 0;
			for(var i = 0; i < numQuestions; i++) {
				if(results[i]) numCorrect++;
			}
		}
		
		function drawSymbols() {
			var grade_images = remove_jw_images();
			for(var i = 0; i < numQuestions; i++) {
				if(!touched[i]) {
					grade_images[i].src = "../../grammar/gimages/questionmark.gif";
				}
				else {
					if(results[i]) grade_images[i].src = "../../grammar/gimages/checkmark.gif";
					else grade_images[i].src = "../../grammar/gimages/redX.gif";
				}
			}
		}
		
		function resetValues() {
			var grade_images = remove_jw_images();
			for(var i = 0; i < numQuestions; i++) {
				grade_images[i].src = "../../grammar/gimages/blank.gif";
			}
			document.getElementById("score").innerHTML = "";
		}
				
		function writeScore() {
			var scorePercent = 0;
			var totalScorePercent = 0;
			var numSkipped = 0;
			
			calcNumCorrect();
			
			if(numAnswered != 0) scorePercent = (numCorrect/numAnswered);
			totalScorePercent = (numCorrect/numQuestions);
			numSkipped = numQuestions - numAnswered;
			
			document.getElementById("score").innerHTML = "<br />Score (of answered): "+  numCorrect + "/" +  numAnswered + " = "+ scorePercent*100 + "%" 
							  +" <br /> Score (of total): " + numCorrect + "/" + numQuestions + " = " + totalScorePercent*100 +  "%" 
							  +" <br /> You abstained from answering: " + numSkipped + " question[s] <br />"
							  +"<span style='cursor:pointer; color: #AE0004;' onclick=document.getElementById('div_03').style.display='block';>Submit Scores</span>"
							  +"<div style='display:none;' id='div_03'><br />"
							  +"<form id='scoreSubmit' name='scoreSubmit' method='get' action='../../include/quiz_submit.php'>"
							  +"<table width='377' border='0' cellpadding='5' cellspacing='1'><tr>"
							  +"<tr><td colspan='3' bgcolor='#E3E3E3'>Use Roomaji/English.&nbsp;&nbsp;NO Kana/kanji</td></tr>"
							  +"<td width='136' bgcolor='#E3E3E3'><div align='right'>User Name</div></td>"
							  +"<td width='12' bgcolor='#E3E3E3'>&nbsp;</td>"
							  +"<td width='213' bgcolor='#E3E3E3'><input type='text' name='user' /><br> ex. nihongo</td>"
							  +"</tr><tr>"
							  +"<td width='136' bgcolor='#E3E3E3'><div align='right'>Password</div></td>"
							  +"<td width='12' bgcolor='#E3E3E3'>&nbsp;</td>"
							  +"<td width='213' bgcolor='#E3E3E3'><input type='text' name='pass' /><br>ex. daisuki</td>"
							  +"</tr><tr>"
							  +"<td width='136' bgcolor='#E3E3E3'><div align='right'>color-number</div></td>"
							  +"<td width='12' bgcolor='#E3E3E3'>&nbsp;</td>"
							  +"<td width='213' bgcolor='#E3E3E3'><input type='text' name='f_name' /><br>ex. kiiro-17</td>"
							  +"</tr><tr>"
							  +"<td width='136' bgcolor='#E3E3E3'><div align='right'>pseudonym</div></td>"
							  +"<td width='12' bgcolor='#E3E3E3'>&nbsp;</td>"
							  +"<td width='213' bgcolor='#E3E3E3'><input type='text' name='l_name' /><br>given in class</td>"
							  +"</tr><tr>"
							  +"<td width='136' bgcolor='#E3E3E3'><div align='right'>Class</div></td>"
							  +"<td width='12' bgcolor='#E3E3E3'>&nbsp;</td>"
							  +"<td width='213' bgcolor='#E3E3E3'><input type='radio' value='506' name='class' />601D &nbsp;&nbsp; <input type='radio' value='507' name='class' />610D<br><input type='radio' value='412K' name='class' />611D &nbsp;&nbsp;&nbsp;<input type='radio' value='412L' name='class' />317C<br><input type='radio' value='320k' name='class' />320K &nbsp;&nbsp;&nbsp;<input type='radio' value='320l' name='class' />320L<br><input type='radio' value='325k' name='class' />325KL &nbsp; <input type='radio' value='325l' name='class' />326/327</td>"
							  +"</tr><tr>"
							  +"<td width='136' bgcolor='#E3E3E3'><div align='right'>Section</div></td>"
							  +"<td width='12' bgcolor='#E3E3E3'>&nbsp;</td>"
							  +"<td width='213' bgcolor='#E3E3E3'><input type='radio' value='1' name='section' />1 &nbsp;&nbsp;<input type='radio' value='6' name='section' />6<br><input type='radio' value='2' name='section' />2 &nbsp; <input type='radio' value='7' name='section' />7<br><input type='radio' value='3' name='section' />3 &nbsp;&nbsp;<input type='radio' value='8' name='section' />8<br><input type='radio' value='4' name='section' />4 &nbsp;&nbsp;<input type='radio' value='9' name='section' />9<br><input type='radio' value='5' name='section' />5</td>"
							  +"</tr><tr>"
							  +"<td bgcolor='#E3E3E3'></td>"
							  +"<td bgcolor='#E3E3E3'></td>"
							  +"<td bgcolor='#E3E3E3'colspan='3'><input type='submit' name='Submit' value='Submit' />"
							  +"<input type='hidden' name='mode' value='insert'/>"
							  +"<input type='hidden' name='q_id' value='"+q_id+"'/>"
							  +"<input type='hidden' name='score' value='"+totalScorePercent+"'/></td>"
							  +"</tr></table>"
							  +"</form>"
							  +"</div><br /><br />";  
			  
			document.close();
			
			
		}
					
	function checkAnswers() {
		drawSymbols();
		writeScore();
	}
		
			
	function show_hide(obj){ 
      if (obj.style.display == "none") 
      {obj.style.display = "block"} 
      else 
      {obj.style.display ="none"} 
      } 
  
  
