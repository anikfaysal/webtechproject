<?php
	if(require_once("db.php")){
	
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
function menproducts()
		{
			global $conn;
			$sql = "SELECT * FROM allproducts WHERE catagory='Men' AND subcatagory='Shirt' ";        
			$result = executeSQL($sql);
        
			$menproducts = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $menproducts[$i] = $row;
			}
        
        return $menproducts;
		}
	function womenproducts()
		{
			global $conn;
			$sql = "SELECT * FROM allproducts WHERE catagory='Women' AND subcatagory='Shirt' ";        
			$result = executeSQL($sql);
        
			$womenproducts = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $womenproducts[$i] = $row;
			}
        
        return $womenproducts;
		}
		
		function catgorymen()
		{
			global $conn;
			$sql = "SELECT distinct subcatagory FROM allproducts WHERE catagory='Men'";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}
		function catgorywomen()
		{
			global $conn;
			$sql = "SELECT distinct subcatagory from allproducts WHERE catagory='Women'";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}

		function catgorykid()
		{
			global $conn;
			$sql = "SELECT distinct subcatagory from allproducts WHERE catagory='Kids'";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}

		function catgoryacc()
		{
			global $conn;
			$sql = "SELECT distinct subcatagory from allproducts WHERE catagory='Accessories'";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}



		function catgoryelec()
		{
			global $conn;
			$sql = "SELECT distinct subcatagory from allproducts WHERE catagory='Electronic'";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}



		
		
		
		
	 function getProductById($productId){
        $sql = "SELECT * FROM allproducts WHERE code=$productId";        
        $result = executeSQL($sql);
        
        $productcode = mysqli_fetch_assoc($result);
        
        return $productcode;
    }
	
	function getProductByNameMale($pnamee){
        $sql = "SELECT * FROM allproducts WHERE catagory='Men' AND  subcatagory LIKE '%$pnamee%'";        
        $result = executeSQL($sql);
		
		 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $getProductByN[$i] = $row;
        }

        return $getProductByN;
    }
		function getProductByNameFemale($pnamee){
        $sql = "SELECT * FROM allproducts WHERE catagory='Women' AND  subcatagory LIKE '%$pnamee%'";        
        $result = executeSQL($sql);
		
		 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $getProductByN[$i] = $row;
        }
   
        return $getProductByN;
    }
	
	function getProductByNameKids($pnamee){
        $sql = "SELECT * FROM allproducts WHERE catagory='Kids' AND  subcatagory LIKE '%$pnamee%'";        
        $result = executeSQL($sql);
		
		 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $getProductByN[$i] = $row;
        }
   
        return $getProductByN;
    }
		function getProductByNameElectronics($pnamee){
        $sql = "SELECT * FROM allproducts WHERE catagory='Electronic' AND  subcatagory LIKE '%$pnamee%'";        
        $result = executeSQL($sql);
		
		 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $getProductByN[$i] = $row;
        }
   
        return $getProductByN;
    }
		function getProductByNameAccesories($pnamee){
        $sql = "SELECT * FROM allproducts WHERE catagory='Accessories' AND  subcatagory LIKE '%$pnamee%'";        
        $result = executeSQL($sql);
		
		 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $getProductByN[$i] = $row;
        }
   
        return $getProductByN;
    }


    //cookies//-
	



	
	function session(){
		
	session_start();
		if(isset($_SESSION['user'])==false){
		header("location:../account/login.php");
		}
		
		if(isset($_SESSION['user'])==true)
		{
			if($_SESSION['user']['usertype']!="user" &&$_SESSION['user']['usertype']!="admin")
			{
				header("location:../account/login.php");
			}
		}

	}
		
					
	}

	
	else{
		echo "Database not found";
	}
	
?>