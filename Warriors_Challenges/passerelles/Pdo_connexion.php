<?php
class Pdo_Connexion {
	private static $strServeur = 'mysql:host=localhost';
	private static $strBdd = 'dbname=id14185378_challenges';//id14185378_challenges
	private static $strUser = 'id14185378_root';//id14185378_root
	private static $strMdp = 'j<t<empi#SZc5pKt';//j<t<empi#SZc5pKt
	private static $objPdo;
	private static $objPdoConnexion = null;
	private function __construct() {
		try {
			Pdo_Connexion::$objPdo = new PDO(Pdo_Connexion::$strServeur . ';' . Pdo_Connexion::$strBdd, Pdo_Connexion::$strUser, Pdo_Connexion::$strMdp);
			Pdo_Connexion::$objPdo->query("SET CHARACTER SET utf8");
			Pdo_Connexion::$objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			echo 'Echec lors de la connexion !' . $e->getMessage();
			die();
		}
	}

	public function __destruct() {
		Pdo_Connexion::$objPdo = null;
	}

	public static function getPdoConnexion() {
		if (Pdo_Connexion::$objPdoConnexion == null) {
			Pdo_Connexion::$objPdoConnexion = new Pdo_Connexion();
		}
		return Pdo_Connexion::$objPdo;
	}
}
?>
