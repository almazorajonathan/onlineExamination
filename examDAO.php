<?php 
	class examDAO{

		public static function getQuestion($id){
			global $db;
			$sql = "SELECT *
					FROM question
					WHERE id = '{$id}'";
			$result = $db->query($sql);
			return $result->fetch_assoc();
		}

		public static function getAnswer(){
			global $db;
			$sql = "SELECT answer FROM question ORDER BY 'id'";
			$result = $db->query($sql);
			$row = array();
			while($answer = $result->fetch_assoc()){
				$row[] = $answer['answer'];
			}
			return $row;
		}

		public static function getScore($answer){
			global $db;
			$correct = self::getAnswer();
			$score = 0;
			for($x = 0; $x < 10; $x++){
				if($correct[$x] == $answer[$x]){
					$score++;
				}
			}
			return $score;
		}

		public static function Average($score){
			$average = "";
			if($score == 10){
				$average = "You can GRADUATE.";
			} else if($score < 10) {
				$average = "You are AVERAGE.";
			} else if($score < 7 || $score > 1){
				$average = "Better luck next time.";
			} else {
				$average = "NO HOPE FOR YOU.";
			}

			return  $average;
		}
	}
?>