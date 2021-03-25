<?php

	// récupere tous les users
	function getUsers() {
		$con = getConnexion();
		$req = 'SELECT * FROM user';
		$users = $con->query($req);
		return $users;
	}

	// creer un user
	function createUser($user) {
		try {
			$con = getConnexion();
			$sql = "INSERT INTO user ($user->getId(),$user->getNom ,$user->getPrenom ,$user->getEmal ,$user->password,) 
					VALUES (null,'$nomUser', '$prenomUser', '$email' ,'$passwor' ,$etat)";
	    	$con->exec($sql);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	//recupere un user
	function recupererUser($id) {
		$con = getConnexion();
		$requete = "SELECT * from user where id = '$id' ";
		$recup = $con->query($requete);
		$infos = $recup->fetchAll();
		if (!empty($infos)) {
			return $infos[0];
		}
		
	}

	//met à jour le user
	function updateUser($id, $nomUser, $prenomUser, $email, $passwor ,$etat) {
		try {
			$con = getConnexion();
			$req = "UPDATE user set 
						nomUser = '$nom',
						prenomUser = '$prenom',
						email = '$email',
						passwor = '$password' 
						where id = '$id' ";
			$maj = $con->query($req);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// suprime un user
	function deleteUser($id) {
		try {
			$con = getConnexion();
			$req = "DELETE from user where id = '$id' ";
			$sup = $con->query($req);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}





?>
    