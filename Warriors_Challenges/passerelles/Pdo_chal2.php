<?php
 class Pdo_chal2 {

 	public static function connexion($login, $pass) {
 		try {
	 		$objPdo = Pdo_Connexion::getPdoConnexion();

 			$PCB = "SELECT * FROM chal2 WHERE login='$login' AND password='$pass'";

			$Exec=$objPdo->query($PCB);

		 	$Result = $Exec->fetchALL();

		 	return $Result;
 		} catch (Exception $ex) {
 			?>
 			<div class="alert alert-danger" role="alert">
 			    <p>J'ai niqué un truc là 🤔</p>
 			    <br>
 			    <p><?php print_r($ex); ?></p>
 			</div>
 			<?php
 		}
 	}
}
?>
