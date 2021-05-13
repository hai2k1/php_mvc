
<?php

class Database
{
	const server = 'localhost';
	const dbName = 'mysqlli';
	const user = 'mysqlli';
	const password = '12345678';
        // Hàm kết nối CSDL
	public function connect()
	{
		$connect = new mysqli(self::server, self::user, self::password, self::dbName);
		mysqli_set_charset($connect,'utf8');
		if (mysqli_connect_errno() === 0) {
			return $connect;
		}
		return false;
		
	}
        // Hàm đóng kết nối CSDL
        public function closeDatabase()
	{
		if ($this->conn) {
			$this->conn->close();
		}
	}
};

?>