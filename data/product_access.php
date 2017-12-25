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
		
	 function getProductById($productId){
        $sql = "SELECT * FROM allproducts WHERE code=$productId";        
        $result = executeSQL($sql);
        
        $productcode = mysqli_fetch_assoc($result);
        
        return $productcode;
    }
		
					
	}

	
	else{
		echo "Database not found";
	}
	
?>