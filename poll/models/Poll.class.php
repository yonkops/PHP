<?php
//complete code for models/Poll.class.php
//beginning of class definition
class Poll {
	private $db;
	//method requires a database connection as argument
	public function __construct( $dbConnection ) {
		//store the recived connection in the $this->db property
		$this->db = $dbConnection;
	}
	
/*	public function getPollData() {
		$pollData = new stdClass();
		$pollData->poll_question = "just testing...";
		$pollData->yes = 0;
		$pollData->no = 0;
		return $pollData;
	} */
	public function getPollData () {
		$sql = "SELECT poll_question, yes, no FROM poll WHERE poll_id = 1";
		//Use the PDO connection to create a PDO Statment object
		$statement = $this->db->prepare($sql);
		//tell MySQL to execute the statement
		$statement->execute();
		//retrive the first row of data from the table
		$pollData = $statement->fetchObject();
		return $pollData;
	}
	public function updatePoll ( $input ){
		if ( $input === "yes" ){
			$updateSQL = "UPDATE poll SET yes = yes+1 WHERE poll_id = 1";
		} else if ( $input === "no" ){
			$updateSQL = "UPDATE poll SET no = no+1 WHERE poll_id = 1";
		}
		$updateStatement = $this->db->prepare($updateSQL);
		$updateStatement->execute();
	}
}