<?php





function login($email,$password)

{	


	$conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
    $sql = "SELECT id, email FROM user WHERE email = '{$email}' AND password= '{$password}'  ";

     $result = mysqli_query($conn, $sql) or die("Query Failed.");

	 if($result)
	 {
		
	
		$user=mysqli_fetch_assoc($result);

		while($row = mysqli_fetch_assoc($result)){
			session_start();
			$_SESSION["email"] = $row['email'];
			$_SESSION["id"] = $row['id'];
			$_SESSION["name"] = $row['name'];
			$_SESSION["role"] = $row['role'];

			
		  }

		if($user['email']=='admin123@gmail.com'   )
		{
			return 'admin';
		}
	
		else 
		{
			return 'user';
		}
	 }

}




?>