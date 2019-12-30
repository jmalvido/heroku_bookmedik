<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bfbf2cd0b5e347";$this->pass="bd5fef2a";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_df1d6fa37af6ec9";
	}

	function connect(){
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
