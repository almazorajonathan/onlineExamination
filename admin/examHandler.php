<?php 
	class examHandler {
		public function saveChanges($id, $question, $choice1, $choice2, $choice3, $choice4, $answer) {
			if(!empty($question) && !empty($choice1) && !empty($choice2) && !empty($choice3) && !empty($choice4) && !empty($answer)){
				$edit = examDAO::saveChanges($id, $question, $choice1, $choice2, $choice3, $choice4, $answer);
				if($edit) {
					return true;
				}
			}
		}

		public function deleteQuestion($id) {
			if(!empty($id)) {
				$delete = examDAO::deleteQuestion($id);
				if($delete) {
					return true;
				}
			}
		}

		public function addQuestion($question, $choice1, $choice2, $choice3, $choice4, $answer) {
			if(!empty($question) && !empty($choice1) && !empty($choice2) && !empty($choice3) && !empty($choice4) && !empty($answer)) {
				$add = examDAO::addQuestion($question, $choice1, $choice2, $choice3, $choice4, $answer);
				if($add) {
					return true;
				}
			}
		}
	}
 ?>