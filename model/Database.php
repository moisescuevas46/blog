<?php 
	class Database {
		private $connection;
		private $host;
		private $username;
		private $password;
		private $database;
	}
	// <!-- makes a variable private by only making it available in this file -->

	public function __contruct($host, $username, $password, $database){
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
	// <!-- it is required to define a constructor to pass any parameters on object construction-->

	public function openConnection(){
		$this->connection = new mysql($this->host, $this->username, $this->password, $this->database)

		if($this->connection->connect_error){
			die("Error: . $this->connection->connect_error");//if it doesnt connect it prints out die.
		}
	}

	public function closeConnection(){
		if (isset($this->connection)) {
			$this->connection->close();
		}
	}
// closes the connection and determines if a variable is set and is not NULL
	public function query($string){

	}
?>

<!-- dan has given me the lifelong answer, basically it is so that we can get an object and that object is class, which holds information so that we dont have to code each function. -->
