<?php
	if(require_once("db.php")){

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




      function allorders()
		{
			global $conn;
			$user=$_SESSION['user']['username'];
			$sql = "SELECT * FROM orders WHERE username LIKE'$user' ";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}

		 function receiveorders()
		{
			global $conn;
			$user=$_SESSION['user']['username'];
			$sql = "SELECT * FROM orders WHERE username LIKE'$user' AND customersts like 'Received'";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}

		 function pendingorders()
		{
			global $conn;
			$user=$_SESSION['user']['username'];
			$sql = "SELECT * FROM orders WHERE username LIKE'$user' AND customersts like 'Not Received'";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}
            
        
        function adminorders()
		{
			global $conn;
			
			$sql = "SELECT * FROM orders WHERE adminsts LIKE 'Confirm' ";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}

		function adminpending()
		{
			global $conn;
			
			$sql = "SELECT * FROM orders WHERE customersts LIKE 'Not Received' ";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}

		function admincancel()
		{
			global $conn;
			
			$sql = "SELECT * FROM orders WHERE adminsts LIKE 'Cancel' ";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}


		function adminnew()
		{
			global $conn;
			
			$sql = "SELECT * FROM orders WHERE adminsts LIKE '' ";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}



    //cookies//-




  function discount()
		{
			global $conn;
			$sql = "SELECT * FROM allproducts WHERE offer != 0";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}
	

  function todaysoffers()
		{
			global $conn;
			$sql = "SELECT * FROM todaysoffers WHERE offer != 0";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}

		 function wish()
		{
			global $conn;
			$user=$_SESSION['user']['username'];
			$sql = "SELECT * FROM wish WHERE username LIKE'$user' ";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}




		





		 function getProductByIdd($productId){
        $sql = "SELECT * FROM todaysoffers WHERE code=$productId";        
        $result = executeSQL($sql);
        
        $productcode = mysqli_fetch_assoc($result);
        
        return $productcode;
    }



     function getProductByIddd($productId){
        $sql = "SELECT * FROM wish WHERE code=$productId";        
        $result = executeSQL($sql);
        
        $productcode = mysqli_fetch_assoc($result);
        
        return $productcode;
    }
	
	



	
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