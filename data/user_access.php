<?php
	if(require_once("../Data/db.php")){
	
		// function searchUser($uname){
			// global $conn;
			// $query="SELECT * FROM users WHERE uname='$uname'";
			// $result=mysqli_query($conn,$query);
			
			// return mysqli_fetch_assoc($result);
		// }
		
		// function addUser($username,$usertype,$password,$name,$email,$gender,$dob,$pp,$address){
			
			// global $conn;

			// $query="INSERT INTO users(username, usertype,password , name, email, gender, dob,pp,address) VALUES ('$username','$usertype','$password','$name','$email','$gender',$dob,'$pp','$address')";
		 	// $result=mysqli_query($conn,$query);
			
			
			// return $result;
		// }
		// function updateUser($uname,$name,$email,$gender,$dob){
			// global $conn;
			// $query="UPDATE users SET name='$name', email='$email', gender='$gender', dob='$dob' WHERE uname='$uname'";
			// $result=mysqli_query($conn,$query);
			
			// return searchUser($uname);
		
		// }
		
		// function deleteUser($uname){
			// global $conn;
			// $query="delete FROM users WHERE uname='$uname'";
			// $result=mysqli_query($conn,$query);
			
			// return $result;
		// }
		
		// function updatepassword($uname,$pass){
			// global $conn;
			// $query="UPDATE users SET pass='$pass' WHERE uname='$uname'";
			// $result=mysqli_query($conn,$query);	
			// return 1;
		
		// }
		function allcustomer()
		{
			global $conn;
			$query="SELECT * FROM users WHERE type='customer' OR type='c'";
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$customer[$i]=$row;
			}
			return $customer;
			}
		}

					
	}else{
		echo "Database not found";
	}
	
?>