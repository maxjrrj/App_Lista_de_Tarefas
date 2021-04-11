<?php 

	namespace App;

	class Conection {
		public static function getDB(){
			try {

				$conn = new \PDO(



					"mysql:host=localhost;dbname=twitch;charset=utf8",
					"root",
					""
				);

				return $conn;

			} catch (\PDOExeption $e) {
				//..... lógica para tratamento de erro.....
			}
		}
	}
?>