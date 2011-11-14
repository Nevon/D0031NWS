<?php
class Ideal {
	public $restler;
	
	function CheckStudentRegistration($anmkod, $studid) {
		global $db;
		
		$statement = $db->prepare(
			'SELECT COUNT(KSid) FROM kursstudent WHERE
			StudentId = :studentid AND AnmKod = :anmkod'
		);
		
		$statement->execute(
			array(
				'studentid' => $studid,
				'anmkod' => $anmkod
			)
		);
		
		$result = $statement->fetch();
		
		if ($result>0) {
			return array('status' => 'valid');
		} else {
			return array('status' => 'invalid');
		}
	}
}

?>
