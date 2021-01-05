<?PHP
	include "../config.php";


	class UtilisateurC {

        function ajouterUtilisateur($Utilisateur){
            $sql="INSERT INTO Utilisateur (nom, prenom, age, email, login, password) 
			VALUES (:nom,:prenom,:age,:email, :login, :password)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'nom' => $Utilisateur->getNom(),
                    'prenom' => $Utilisateur->getPrenom(),
                    'age' => $Utilisateur->getAge(),
                    'email' => $Utilisateur->getEmail(),
                    'login' => $Utilisateur->getLogin(),
                    'password' => $Utilisateur->getPassword()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }



        function afficherUtilisateurs(){
			
			$sql="SELECT * FROM Utilisateur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

        function display(){

            $sql="SELECT * FROM Utilisateur where id='22'";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

		function supprimerUtilisateur($id){
			$sql="DELETE FROM Utilisateur WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierUtilisateur($Utilisateur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Utilisateur SET 
						nom = :nom, 
						prenom = :prenom,
						age = :age,
						email = :email,
						login = :login,
						password = :password
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $Utilisateur->getNom(),
					'prenom' => $Utilisateur->getPrenom(),
                    'age' => $Utilisateur->getAge(),
					'email' => $Utilisateur->getEmail(),
					'login' => $Utilisateur->getLogin(),
					'password' => $Utilisateur->getPassword(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererUtilisateur($id){
			$sql="SELECT * from Utilisateur where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
        function calculerMoyAge()
        {

            $sql="select * from utilisateur ";

            $db = config::getConnexion();
            try
            {
                $listuser=$db->query($sql);
                return $listuser;
            }
            catch (Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }
        }

		function recupererUtilisateur1($id){
			$sql="SELECT * from Utilisateur where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function connexionUser($email,$password){
            $sql="SELECT * FROM Utilisateur WHERE Email='" . $email . "' and password = '". $password."'";
            $db = config::getConnexion();
            $x=null;
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                   // $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    //$message = $x['role'];
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $x;
        }

        function forgotPass($email)
        {

            $sql="select * from traveldream.utlisateur where email='$email' ";
            $str="1234567890azertyuiopqsdfghjklmwxcvbn";
            $str=str_shuffle($str);
            $str=substr($str, 0,5);
            $sql2="update traveldream.utlisateur set password='$str'  where email='$email'";


            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();

                $user = $query->fetch(PDO::FETCH_OBJ);
                return $user;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
	}
?>