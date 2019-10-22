<?php

class Mahasiswa_model {
	// private $mhs = [
	// 	[
	// 		"nama" => "Andika Wahyu Setiawan",
	// 		"nrp" => "173040021",
	// 		"email" => "andikawahyusetiawan@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik Informatika"
	// 	],

	// 	[
	// 		"nama" => "Andika wahyu",
	// 		"nrp" => "1730400211",
	// 		"email" => "andikawahyusetiawan1@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik Informatika"
	// 	],

	// 	[
	// 		"nama" => "Wahyu Setiawan",
	// 		"nrp" => "1730400212",
	// 		"email" => "andikawahyusetiawan3@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik Informatika"
	// 	]
	// ];

	private $dbh;
	private $stmt;

	public function __construct()
	{
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		try
		{
			$this->dbh = new PDO($dsn, 'root', '');
		} catch(PDOException $e) {
			die($e->getMssage);
		}
	}

	public function getAllMahasiswa()
	{
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

}

}