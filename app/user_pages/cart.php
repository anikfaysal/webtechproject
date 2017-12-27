<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>


<html>

<head>
    <title>Cart</title>
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
        <td  valign="top"  width="13%">
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
			<li><a href="spm products.php?pname=Shirt">Men's Shirts</a></li>
			<li><a href="spm products.php?pname=Pant">Men's Pants</a></li>
			<li><a href="spm products.php?pname=Shoe">Men's Shoes</a></li>
			<li><a href="spm products.php?pname=Belt">Belt</a></li><br>
			<a href="select persons female.php">Women's Product</a><hr>
			<li><a href="spf products.php?pname=Dress">Dresses</a></li>
			<li><a href="spf products.php?pname=Pant">Pants</a></li>
			<li><a href="spf products.php?pname=Shoe">Shoes</a></li>
			<li><a href="spf products.php?pname=Bags">Bags</a></li><br>
			<a href="select persons kids.php">Kid's Product</a><hr>
			<li><a href="spk products.php?pname=Dress">Dress</a></li>
			<li><a href="spk products.php?pname=Diapers">Diapars</a></li>
			<li><a href="spk products.php?pname=Shoe">Shoes</a></li>
			<li><a href="spk products.php?pname=Toys">Toys</a></li><br>
			<a href="accessories.php">Accessories</a><hr>
			<li><a href="ack products.php?pname=Wallet">Wallet</a></li>
			<li><a href="ack products.php?pname=Bag">Bags</a></li>
			<li><a href="ack products.php?pname=BackCover">Backcovers</a></li>
			<li><a href="ack products.php?pname=HandBand">Handsbands</a></li><br>
			<a href="electronics.php">Electronics</a><hr>
			<li><a href="eck products.php?pname=Mobile">Mobile</a></li>
			<li><a href="eck products.php?pname=TableFan">Table Fans</a></li>
			<li><a href="eck products.php?pname=HeadPhone">Headphones</a></li>
			<li><a href="eck products.php?pname=Smart Watch">Smart Watches</a></li><br>
			</ul>
        </td>

    <td valign="top" width="40%">

        <table  align="center" width="100%">
         
            <tr>
                <th align="center"><label><h3>Cart</h3></label></th>

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
                    Men's Shirt<br> Color : Blue<br> Size : L<br>Quantity : <select name="quantity">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select><br> Price : 550tk
                </td>
                <td>
                    <input type="button" value="X">
                </td>
            </tr>
            <tr height="50">
                <td width="15%">
                    <img src="pictures/wshirt1.PNG" height="100" width="100">
                </td>
                <td width="15%">
                    Women's Shirt<br> Color : Blue<br> Size : M<br>Quantity : <select name="quantity">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select><br> Price : 600tk
                </td>
                <td>
                    <input type="button" value="X">
                </td>
            </tr>
            <tr height="30">

            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href="purches.php">  <input type="submit" value="Proceed To Check-Out">
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