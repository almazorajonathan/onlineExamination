<?php 
	class examDAO {
		public static function getQuestion(){
			try {
				global $db;
				$sql = "SELECT * FROM question";
				$result = $db->query($sql);
				$list = array();
				if($result->num_rows) {
					while($row = $result->fetch_assoc()) {
						$list[] = $row;
					}
					return $list;
				}
			} catch(Exception $e) {
				error_log('Error Occured.');
			}
		}

		public static function editQuestion($id) {
			try {
				global $db;
				$sql = "SELECT * FROM question WHERE id = '{$id}'";
				$result = $db->query($sql);
				if($result->num_rows) {
					return $result->fetch_assoc();
				}
			} catch (Exception $e) {
				error_log('Erro Occured.');
			}
		}

		public static function saveChanges($id, $question, $choice1, $choice2, $choice3, $choice4, $answer) {
			try {
				global $db;
				$sql = "UPDATE question
						SET question = '{$question}',
							choice1 = '{$choice1}',
							choice2 = '{$choice2}',
							choice3 = '{$choice3}',
							choide4 = '{$choice4}',
							answer = '{$answer}'
						WHERE id = '{$id}'";
				$result = $db->query($sql);
				if($result) {
					return true;
				} else {
					return false;
				}
			} catch(Exception $e) {	
				error_log('Error Occured.');
			}
		}

		public static function deleteQuestion($id) {
			try {
				global $db;
				$sql = "DELETE FROM question WHERE id = '{$id}'";
				$result = $db->query($sql);
				if($result) {
					return true;
				} else {
					return false;
				}
			} catch (Exception $e) {
				error_log('Error Occured.');
			}
		}

		public static function addQuestion($question, $choice1, $choice2, $choice3, $choice4, $answer) {
			try {
				global $db;
				$sql = "INSERT INTO question(question, choice1, choice2, choice3, choide4, answer)
						VALUES('{$question}','{$choice1}','{$choice2}','{$choice3}','{$choice4}','{$answer}')";
				$result = $db->query($sql);
				if($result) {
					return true;
				}
			} catch (Exception $e) {
				error_log("Error Occured.");
			}
		}
	}
 ?>