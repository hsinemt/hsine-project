<?php 
class User{
	private $email;
    private $password;
	private $role;
    public $conn;	

	public function __construct($email,$password,$conn)
	{
		$this->email=$email;
		$this->password=$password;
		$this->conn=$conn;
		
	}
	function getEmail()
	{
		return $this->email;
	}
    function getPassword()
	{
		return $this->password;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($conn,$email,$password)
	{
		$req="select * from utlisateur where email='$email' && password='$password'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>