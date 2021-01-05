<?PHP
	class admin{
		private $id = null;
		private $nom = null;
		private $prenom = null;
        private $age = null;
		private $email = null;
		private $login = null;
		private $password = null;
		
		function __construct( $nom,  $prenom, $age, $email,  $login,  $password){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
            $this->age=$age;
			$this->email=$email;
			$this->login=$login;
			$this->password=$password;
		}
		
		function getid(){
			return $this->id;
		}
		function getNom(){
			return $this->nom;
		}
		function getPrenom(){
			return $this->prenom;
		}
        function getAge(){
            return $this->age;
        }
		function getLogin(){
			return $this->login;
		}
		function getEmail(){
			return $this->email;
		}
		function getPassword(){
			return $this->password;
		}

		function setNom($nom){
			$this->nom=$nom;
		}
		function setPrenom($prenom){
			$this->prenom;
		}
        function setAge(){
            $this->prenom;
        }
		function setLogin( $login){
			$this->login=$login;
		}
		function setEmail( $email){
			$this->email=$email;
		}
		function setPassword( $password){
			$this->password=$password;
		}
	}
?>