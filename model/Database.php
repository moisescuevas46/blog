<?php 
	class Database {
		private $connection;
		private $host;
		private $username;
		private $password;
		private $database;
		public $error;
	
	// <!-- makes a variable private by only making it available in this file -->

	public function __construct($host, $username, $password, $database){
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;

		$this->connection = new mysqli($host, $username, $password);

		if($this->connection->connect_error){
			die("Error: . $this->connection->connect_error");//if it doesnt connect print out die
		}
	
		$exists = $this->connection->select_db($database);//tries to acces a database

		if (!$exists) {
			$query = $this->connection->query("CREATE DATABASE $database");//gets a database

			if($query){
				echo "Successfuly created database: " . $database;//prints out the text
			} 
		}
	
		else {
			echo "";//echos if the database already exists or doesnt if it doesnt
		}
	}
	
	// <!-- it is required to define a constructor to pass any parameters on object construction-->

	public function openConnection(){
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

		if($this->connection->connect_error){
			die("<p>Error: . $this->connection->connect_error" . "</p>"); //if it doesnt connect it prints out die.
		}
	}

	public function closeConnection(){
		if (isset($this->connection)) {
			$this->connection->close();
		}
	}
// closes the connection and determines if a variable is set and is not NULL
	public function query($string){
		$this->openConnection();
			$query = $this->connection->query($string);
				if (!$query) {
				$this->error = $this->connection->error;
			}
		$this->closeConnection();
		return $query;
	}
}
?>

<!-- dan has given me the lifelong answer, basically it is so that we can get an object and that object is class, which holds information so that we dont have to code each function. -->
