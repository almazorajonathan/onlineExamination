$(document).ready(function(){
		$('#yesExam').click(function(){
			var well = $('#well');
			$('#takeExam').hide(1000);
			$('#testExam').fadeIn(1000);
			$('#well').fadeIn(1000);
			$('#choices').slideDown(1000);
			well.animate({height:'370px'},'slow');
			well.animate({width:'900px'},'slow');
			// well.animate({height:'100px'},'slow');
			// well.animate({height:'200px'},'slow').delay(1000);
			// well.animate({height:'370px'},'slow');
			$('#ques').delay(1000).slideDown(4000);
			var min = 30;
			var second = 0;
			countDown = setInterval(function(){
				if(min == 0 && second == 0){
					$('#countdown').html("0 : 00");
					clearTimeout(countDown);
				} else if ((second % 60) == 0) {
					$('#countdown').html(min +" : 0"+second);
					min--;
					second = 59;
				} else if (second < 10){
					$('#countdown').html(min +" : 0"+second);
					second--;
				} else {
					$('#countdown').html(min +" : "+second);
					second--;
				}
			},1000);
		});
	});

	$(document).ready(function(){
		$('#noExam').click(function(){
			$('#takeExam').hide(1000);
			$('#takeExam').fadeOut(1000);
			$('#exitTest').fadeIn(1000);
		});
		$('#exitYes').click(function(){
			window.location.href='exam.php';
		});
		$('#exitNo').click(function(){
			$('#exitTest').fadeOut(1000);
			$('#takeExam').slideDown(1000).fadeIn(1000);
			
		});
		var quesNum = 1;
		var qid = 1
		var answer;
		var score = 0;
		$('#nextPage').click(function(){
			quesNum++;
			var question_id = quesNum;
			var qid_id = qid;
			if($('#radio1').is(':checked')){
				answer = $('#radio1').val();
			} else if($('#radio2').is(':checked')){
				answer = $('#radio2').val();
			} else if($('#radio3').is(':checked')){
				answer = $('#radio3').val();
			} else if($('#radio4').is(':checked')){
				answer = $('#radio4').val();
			} else {
				alert('No Answer');
				return false;
			}

			// var score = parseInt($('#scored').val());
			$.ajax({
				url: 'getAnswer.php',
				data: {question_id: qid_id, answer: answer},
				dataType: 'JSON',
				method : 'GET',
				success: function(response){
					// alert(response.correctAnswer);
					score += response.correctAnswer;
					$('#asdf').html(score);
					// $('#asdf').html(response.correctAnswer);
					// $('#score').html('<input type="hidden" value="' + response.correctAnswer + '">');
				}
			})
			qid++;

			if(quesNum <= 10) {
				$('#Question').hide(1000);
				$('#quesNum').hide(1000);
				$('#ques').hide(1000).delay(1000);
				$('#well').slideUp(1000);
				
				
				$.ajax({
					url:'getquestion.php',
					data:{question_id: question_id},
					dataType:'JSON',
					method:'GET',
					success:function(response){
						$('#ques').show(1000)
						$('#well').slideDown(1000);
						$('#quesNum').show(1000)
						$('#Question').show(1000);
						$('#quesNum').html(quesNum);
						$('#Question').html(response.quesNum)
					}
				});
				var choice_id = quesNum
				$('#choice1').hide(1000);
				$('#choice2').hide(1000);
				$('#choice3').hide(1000);
				$('#choice4').hide(1000);
				$.ajax({
					url: 'getchoices.php',
					data: {choice_id:choice_id},
					dataType: 'JSON',
					method: 'GET',
					success:function(response){
						$('#choice1').fadeOut(1000).delay(2000).show(1000);
						$('#choice2').fadeOut(1000).delay(2000).show(1000);
						$('#choice3').fadeOut(1000).delay(2000).show(1000);
						$('#choice4').fadeOut(1000).delay(2000).show(1000);
						$('#choice1').html("<input type='radio' id='radio1' name='radio' value='a'><font size='3'><b>" + response.choice1 + "</b></font>")
						$('#choice2').html("<input type='radio' id='radio2' name='radio' value='b'><font size='3'><b>" + response.choice2 + "</b></font>")
						$('#choice3').html("<input type='radio' id='radio3' name='radio' value='c'><font size='3'><b>" + response.choice3 + "</b></font>")
						$('#choice4').html("<input type='radio' id='radio4' name='radio' value='d'><font size='3'><b>" + response.choice4 + "</b></font>")
					}
				});
			} else {
				$('#testExam').hide(1000).fadeOut(1000);
				$('#testresult').delay(1000).slideDown(1000);
				$('#score').html(score);
			}
		})
	})