<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Most Visited Products</title>
</head>
<body width="1200">
	<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr><th colspan="3" align="right" width="60%">
			<a href="home.php"><img src="pictures\ali.png" align="left" align="top" width="20%"></a>
				<br>
				<br>
		
				<input type="text" name="search" placeholder="Enter keyword Here....">
				<input type="submit" value="Search Here">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Loggedin as <a href="../account/profile.php">Anik</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="../account/login.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a href="order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
			
			</tr>
		<tr>
			<td  valign="top"  width="13%">
		<label><b> Account</b></label><br><hr>
			<ul>
		
			<li><a href="home.php">Home</a>	</li>
			<li><a href="../account/profile.php">View profile</a>	</li>	
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
			<td valign="top" height="400" align="center">
				 <table border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <th align="center"><label><h3>Most Visited Products (Last Month)</h3></label></th>
            </tr>
        </table>

        <table align="left" width="100%">
            <tr>
                <td width="15%" align="center">
                    <h3>Image</h3>
                </td>
                <td width="14%" align="center">
                   <h3>Category</h3>
                </td>
                <td width="14%" align="center">
                   <h3>Sub-Category</h3>
                </td>
                <td width="14%" align="center">
                    <h3>Code</h3>
                </td>
                <td width="14%" align="center">
                    <h3>Price</h3>
                </td>
                <td width="14%" align="center">
                    <h3>Total Visited </h3>
                </td>
                <td width="14%" align="center">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <img src="pictures/mshirt4.PNG" align="center" width="45%" height="25%">
                </td>
                <td align="center">
                    <h3>Men</h3>
                </td>
                <td align="center">
                    <h3>Shirt</h3>
                </td>
                <td align="center">
                    <h3>MS-177</h3>
                </td>
                <td align="center">
                    <h3>550tk</h3>
                </td><br>
                 <td align="center">
                    <h3>50 times</h3>
                </td>
                <td>
                     <input type="submit" value="Add to Cart" onclick="function1()" />
                </td>
                <br>
                
            </tr>
            <tr>
                <td align="center">
                    <img src="pictures/wprog5.PNG" align="center" width="45%" height="25%">
                </td>
                <td align="center">
                    <h3>Women</h3>
                </td>
                <td align="center">
                    <h3>Pant</h3>
                </td>
                <td align="center">
                    <h3>WP-111</h3>
                </td>
                <td align="center">
                    <h3>800tk</h3>
                </td>
                <td align="center">
                    <h3>40 times</h3>
                </td>
                <td>
                     <input type="submit" value="Add to Cart" onclick="function1()" />
                </td>
                <br>
            </tr>
            <tr>
                <td align="center">
                    <img src="pictures/kids3.PNG" align="center" width="45%" height="25%">
                </td>
                <td align="center">
                    <h3>Kids</h3>
                </td>
                <td align="center">
                    <h3>Shoes</h3>
                </td>
                <td align="center">
                    <h3>KS-8</h3>
                </td>
                <td align="center">
                    <h3>300tk</h3>
                </td>
                <td align="center">
                    <h3>20 times</h3>
                </td>
                <td>
                     <input type="submit" value="Add to Cart" onclick="function1()" />
                </td>
                <br>
            </tr>
            <tr>
                <td align="center">
                    <img src="pictures/mobile.PNG" align="center" width="45%" height="25%">
                </td>
                <td align="center">
                    <h3>Electronics</h3>
                </td>
                <td align="center">
                    <h3>Mobile</h3>
                </td>
                <td align="center">
                    <h3>PS-44</h3>
                </td>
                <td align="center">
                    <h3>10000tk</h3>
                </td>
                <td align="center">
                    <h3>55 times</h3>
                </td>
                <td>
                     <input type="submit" value="Add to Cart" onclick="function1()" />
                </td>
                <br>
            </tr>
        </table>

			</td>
		</tr>
		<tr align="center">
			<td colspan="3">
				<h3>Copyright © 2017</h3>
			</td>
		</tr>
	</table>
</body>
<script>
	function function1()
{
    window.alert ("Added to cart");
}
</script>
</html>