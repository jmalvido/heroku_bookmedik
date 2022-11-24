<?php
class Database {
	public static $db;
	public static $con;
	function Database(){/*
		if (isset($_ENV["CLEARDB_DATABASE_URL"]))
		{
			$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
			$var_server = $cleardb_url["host"];
			$var_username = $cleardb_url["pass"];
			$var_db = substr($cleardb_url["path"], 1)


		}
		else //Entorno de desarollo
		{
		$var_server = "localhost";
		$var_username = "username";
		$var_password = "userpassword";
		$var_db = "newdb";
		}*/

		$this->user="jaime";$this->pass="dnl7Rq3IilG1WGwziWgFtzctGZLi4dBq";$this->host="dpg-cdvl5dirrk09es8j756g-a.oregon-postgres.render.com";$this->ddbb="medikdb";
	}

	function connect(){
		$this->user="jaime";$this->pass="dnl7Rq3IilG1WGwziWgFtzctGZLi4dBq";$this->host="dpg-cdvl5dirrk09es8j756g-a.oregon-postgres.render.com";$this->ddbb="medikdb";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
