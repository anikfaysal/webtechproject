<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>
<html>

<head>
    <title>Purches</title>
</head>

<table  align="center" width="1200">

    <tr><th colspan="3" align="right" width="60%">
               <a href="home.php"><img src="pictures\ali.png" align="left" align="top" width="20%"></a>
                <br>
                <br>
        
                <input type="text" name="search" placeholder="Enter keyword Here....">
                <input type="submit" value="Search Here">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Login as <a href="../account/profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="../account/login.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
                <a href="order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
            
            </tr>
        <tr>
        <td  valign="top"  width="10%">
        <label><b> Account</b></label><br><hr>
            <ul>
        
            <li><a href="home.php">Home</a>    </li>
            <li><a href="../account/profile.php">View profile</a>  </li>   
            <li><a href="order.php">My Orders </a></li>
            <li><a href="../account/editprofile.php">Settings</a></li>
            <li><a href="../account/changepass.php">Change Password</a></li>
			<li><a href="../account/changepp.php">Change Profile Picture</a></li>
            <li><a href="../account/login.php">Logout </a></li>
            
                </ul>
        
        
        <label><b>Catagories</b></label><br><hr>
            <ul>
            <a href="select persons male.php">Men's Product</a><hr>
            <li><a href="spm products.php">Men's Shirts</a></li>
            <li><a href="">Men's Pants</a></li>
            <li><a href="">Men's Shoes</a></li>
            <li><a href="">Belt</a></li><br>
            <a href="select persons female.php">Women's Product</a><hr>
            <li><a href="spf products.php">Dresses</a></li>
            <li><a href="">Pants</a></li>
            <li><a href="">Shoes</a></li>
            <li><a href="">Bags</a></li><br>
            <a href="select persons kids.php">Kid's Product</a><hr>
            <li><a href="spk products.php">Dress</a></li>
            <li><a href="">Diapars</a></li>
            <li><a href="">Shoes</a></li>
            <li><a href="">Toys</a></li><br>
            <a href="accessories.php">Accessories</a><hr>
            <li><a href="">Wallet</a></li>
            <li><a href="">Bags</a></li>
            <li><a href="">Backcovers</a></li>
            <li><a href="">Handsbands</a></li><br>
            <a href="electronics.php">Electronics</a><hr>
            <li><a href="">Mobile</a></li>
            <li><a href="">Table Fans</a></li>
            <li><a href="">Headphones</a></li>
            <li><a href="">Smart Watches</a></li><br>
            <label><b>Report</b></label><hr>
            <li><a href="myPurchase.php">My Purchase Stastics</a></li>
			<li><a href="mylastPurchaseList.php">My Last Purchase List </a></li>
			<li><a href="mymostVisitedProduct.php">My Most Visited Product List </a></li>
			<li><a href="mymostPurchasedProduct.php">My Most Purchased Product List </a></li>
			<li><a href="myfavouriteList.php">My Favourite List </a></li>
			</ul>
    </td>

    <td valign="top" width="40%">

        <table  align="center" width="100%">
            <tr height="100">
                <th><img src="pictures/ali.PNG" width="100%" height="100%"></th>

            </tr>
            <tr>
                <th align="center"><label><h3>Purches</h3></label></th>

            </tr>
        </table>

        <table align="left" width="100%">
            <tr height="30">

            </tr>
            <tr height="50">
                <td width="15%">
                    <img src="pictures/mshirt4.PNG" height="100" width="100">
                </td>
                <td width="15%">
                    Men's Shirt<br> Color : Blue<br> Size : L<br> Price : 1500tk
                </td>
                <td>
                   <table   align="center"  >
						<td>
							<strong>Total Amount</strong><br><br>
							Price : 1500tk<br><br>
							<strong>Total:1500tk</strong><br><br><br><br>
							
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="delevaryAddress.php"><input type="submit" value="Buy Now"></a>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cart.php"><input type="submit" value="Go Back"></a>
						</td>
				    </table>
                </td>
            </tr>
            <tr height="50">
                <td width="15%">
                    
                </td>
                <td width="15%">
                    
                </td>
                <td>
                   
                </td>
            </tr>
            <tr height="30">

            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    
                </td>
            </tr>
        </table>

    </td>



    <tr height="100">
        <th colspan="2">
            <a href="aboutus.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="learnmore.php">Learn more</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="license.php">License</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </th>
    </tr>






</table>


</html>