<?php
	if(require_once("db.php"))
    {
		
	 function getAllUsers(){
            $sql = "SELECT * FROM users";        
            $result = executeSQL($sql);
         
            $allUser = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $allUser[$i] = $row;
			}
            return $allUser;
            }
        
    function getUsersByName($searchvalue){
            $sql = "SELECT * FROM users WHERE name LIKE '%$searchvalue%'";        
            $result = executeSQL($sql);
         
            $UserByName = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $UserByName[$i] = $row;
			}

            return $UserByName;				
	        }
        
    function getUsersByEmail($searchvalue){
            $sql = "SELECT * FROM users WHERE email LIKE '%$searchvalue%'";        
            $result = executeSQL($sql);

            $Useremail = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $Useremail[$i] = $row;
			}

            return $Useremail;				
	        }
        
    function getUsersByStatus($searchvalue){
            $sql = "SELECT * FROM users WHERE status LIKE '%$searchvalue%'";        
            $result = executeSQL($sql);
            
            $Userstatus = array();
            for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $Userstatus[$i] = $row;
			}

            return $Userstatus;				
	        }
        
    function getUsersByUserName($searchvalue){
            $sql = "SELECT * FROM users WHERE username LIKE '%$searchvalue%'";        
            $result = executeSQL($sql);
         
            $UserName = mysqli_fetch_assoc($result);

            return $UserName;				
	        }
        
    function DeleteUsersByUserName($searchvalue){
            $sql = "DELETE FROM users WHERE username='$searchvalue'";        
            $result = executeSQL($sql);
            
            return $result;				
	        }
        
    function UpdateUserByUserName($User){
            $sql = "UPDATE users SET usertype='$User[usertype]', name='$User[name]',email='$User[email]', gender='$User[gender]',dob='$User[dob]', pp='$User[pp]',address='$User[address]',status='$User[status]' WHERE  username='$User[username]'";
            $result = executeSQL($sql);
            return $result;
            }
        
    }
	
	else
    {
            echo "Database not found";
	}
	
?>