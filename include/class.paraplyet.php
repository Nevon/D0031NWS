<?php
class Paraplyet {
	public $restler;
	
	function GetRegistrationCode($kurskod, $termin, $provnr) {
		global $db;
		
		$statement = $db->prepare(
			'SELECT AnmKod FROM kurstillfalle WHERE
			KursKod = :kurskod 
			AND Termin = :termin
			AND ProvNr = :provnr
			LIMIT 1
			ORDER BY kTid DESC'
		);
		
		$statement->execute(
			array(
				'kurskod' => $kurskod,
				'termin' => $termin,
				'provnr' => $provnr
			)
		);
		
		$result = $statement->fetch();
		
		return $result;
	}
}

?>
