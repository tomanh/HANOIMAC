<?php
class DataBase{
	protected $conn = null;
	protected $host = '127.0.0.1';
	protected $user = 'root';
	protected $pass = '';
	protected $name = 'test';

	public function __construct()
		{
			$this->connect();
		}

	public function connectDataBase(){
		$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
		if (!$this->conn) {
			echo "Kết nối thất bại";
			exit();
		}
	}

	public function currencyFormat($number, $suffix='') {
	    if (!empty($number)) {
	    	return number_format($number, 0, ',', '.') . "{$suffix}";
	    }
	}

	public function getProduct ($table, $condition=array()){
		$sql = "SELECT * FROM $table";
		if (!empty($condition)) {
			$sql.= " WHERE";
			foreach ($condition as $key => $value) {
			$sql.=" $key = '$value' AND";
			}
			$sql= trim($sql, "AND");
		}
		$query = mysqli_query($this->conn, $sql);
		$result = array();
		if ($query){
			while($row = mysqli_fetch_assoc($query)){
				$result[] = $row;
			}
		}
		return $result;		
	}

	public function getProduct2 ($table, $column, $id){ 
		$sql = "SELECT * FROM $table";
		if (!empty($column)||!empty($id)) {
			$sql.= " WHERE $column=$id";
		}
		$query = mysqli_query($this->conn, $sql);
		$result = array();
		if ($query){
			while($row = mysqli_fetch_assoc($query)){
				$result[] = $row;
			}
		}

		return $result;	
	}

	public function getProduct3 ($table, $condition=array()){
		$sql = "SELECT * FROM $table";
		if (!empty($condition)) {
			$sql.= " WHERE";
			foreach ($condition as $key => $value) {
				$sql.=" $value AND";
			}
			$sql= trim($sql, "AND");
		}
		$query = mysqli_query($this->conn, $sql);
		$result = array();
		if ($query){
			while($row = mysqli_fetch_assoc($query)){
				$result[] = $row;
			}
		}

		return $result;	
}
	
//Hàm search
	public function search($table,$column,$values){
		$sql="SELECT * from $table";
		$sql.=" WHERE $column LIKE '%$values%'";
		$query=mysqli_query($this->conn, $sql);
		$result = array();
		if ($query) {
			while ($row=mysqli_fetch_assoc($query)){
				$result[] = $row;{
			}

			return $result;		
			}
		}


	public function insert($table,$data=array())
		{
			$keys = array_keys($data);
			$fields =  implode(",", $keys);
			$valueStr ='';

			foreach ($data as $key => $value) {
				$value_str	 .="'$value',"; 
			}
			$valueStr = trim($value_str, ",");
			$sql = "INSERT INTO $table ($fields) VALUES ($value_str)";
			$query = mysqli_query($this->conn,$sql);

			return $query;
		}

	public function update($table,$data=array(),$condition=array()){	
			$str = '';
			foreach ($data as $key => $value) {
				$str .="$key = '$value',"; 
			}
			$str = trim($str,",");
			$sql = "UPDATE $table SET $str WHERE ";
			foreach ($condition as $key => $value) {
				$sql.= "$key = '$value' AND";
			}
			$sql = trim($sql,'AND');
			$query = mysqli_query($this->conn,$sql);

			return $query;
		}

	public function delete($table,$condition=array())
		{
			$sql = " DELETE FROM $table WHERE ";
			foreach ($condition as $key => $value) {
				$sql.= "$key = '$value' AND";
			}
			$sql = trim($sql,'AND');
			$query = mysqli_query($this->conn,$sql);

			return $query;
		}
}
?>