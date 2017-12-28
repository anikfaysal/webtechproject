<?php
	if(require_once("db.php"))
    {
		
	 function getAllProduct(){
            $sql = "SELECT * FROM allproducts ";        
            $result = executeSQL($sql);
		
		    $getAllProduct = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $getAllProduct[$i] = $row;
			} 
            return $getAllProduct;
            }
        
    function getAllProductByCatagory($searchkey){
            $sql = "SELECT * FROM allproducts WHERE catagory LIKE '%$searchkey%'";        
            $result = executeSQL($sql);
		
		    $ProductByCatagory = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductByCatagory[$i] = $row;
			} 
            return $ProductByCatagory;
            }
        
    function getAllProductBySubCatagory($searchkey){
            $sql = "SELECT * FROM allproducts WHERE subcatagory LIKE '%$searchkey%'";        
            $result = executeSQL($sql);
		  
		    $ProductBySubCatagory = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductBySubCatagory[$i] = $row;
			} 
            return $ProductBySubCatagory;
            }
        
    function getAllProductByName($searchkey){
            $sql = "SELECT * FROM allproducts WHERE name LIKE '%$searchkey%'";        
            $result = executeSQL($sql);
		
		    $ProductByName = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductByName[$i] = $row;
			} 
            return $ProductByName;
            }
        
    function getAllProductByCode($searchkey){
            $sql = "SELECT * FROM allproducts WHERE code LIKE '%$searchkey%'";        
            $result = executeSQL($sql);
		
		    $ProductByCode = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductByCode[$i] = $row;
			} 
            return $ProductByCode;
            }
        
    function deleteProductByCode($searchkey){
            $sql = "DELETE FROM allproducts WHERE code=$searchkey";        
            $result = executeSQL($sql);
            
            return $result;
            }
        
    function editProduct($product){
            $sql = "UPDATE allproducts SET name='$product[name]', color='$product[color]',material='$product[material]', size='$product[size]',description='$product[description]', bprice='$product[bprice]',sprice='$product[sprice]', quantity='$product[quantity]' WHERE code=$product[code]";
            $result = executeSQL($sql);
            return $result;
            }
        
        function editProductpic($product){
            $sql = "UPDATE allproducts SET pdpic='$product[pdpic]' WHERE code=$product[code]";
            $result = executeSQL($sql);
            return $result;
            }
        
        
    function AddProduct($product){
			$a =0;
            $sql = "INSERT INTO allproducts(code,name,catagory,subcatagory,color,material,size,description,bprice,sprice,quantity,offer,pdpic) VALUES('$product[code]','$product[name]','$product[catagory]','$product[subcatagory]','$product[color]','$product[material]','$product[size]','$product[description]','$product[bprice]','$product[sprice]','$product[quantity]','$a','$product[pdpic]')";
            $result = executeSQL($sql);
            return $result;
            }
	}

	
	else
    {
		echo "Database not found";
	}
	
?>