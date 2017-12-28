<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location:../account/login.php");
	}
		if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['usertype']!="admin")
		{
				header("location:../account/login.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body width="1200">
	<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="loggedin.php"><img src="../res/common/ali.PNG" alt="ali" width="200"></a>
						</td>
						<td width="630"></td>
						<td>
							<span>Logged in as <a href="profile.php"><?= $_SESSION['user']['name']; ?></a></span> &nbsp;&nbsp; | &nbsp;&nbsp;
							<a href="logouthandler.php">Logout</a>

						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td width="200" valign="top">
				<br>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</span>

				<table >
					<tr >
						<td width="200">
							<hr>
						</td>
					</tr>
				</table>
				<ul>
				    <li><a href="Dashboard.php">Dashboard</a></li>
					<li><a href="loggedin.php">Home</a></li>
					<li><a href="profile.php">View Profile</a></li>
					<li><a href="editprofile.php">Edit Profile</a></li>
					<li><a href="changepp.php">Change Profile Picture</a></li>
					<li><a href="changepass.php">Change Password</a></li>
					<li><a href="logouthandler.php">Logout</a></li>
				</ul>
				<hr>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User</span><br>
				<hr>
				<ul>
					<li><a href="search.php">Search</a></li>
					<li><a href="create.php">Create New</a></li>
				</ul>
				<hr>
				
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Categories</span><br>
        <hr>
        <ul>
            Products
            <hr>
			<li><a href="orders.php">Orders</a></li>
            <li><a href="allProducts.php">All Products</a></li>
            <li><a href="settings.php">Product Settings</a></li>
            <li><a href="Discount.php">Discount's</a></li>
			<li><a href="editdiscount.php">Edit Discount</a></li>
            <li><a href="todays_offer.php">Today's Offer</a></li><br>
           </ul>
            <hr>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report</span><br>
            <hr>
            <ul>
            User
            <hr>
            <li><a href="statistics_report.php">Statistics Report</a></li>
            <li><a href="activity_report.php">Activity Report</a></li>
            </ul>
            <ul>
            Product
            <hr>
            <li><a href="mostVisitedProduct.php">Most Visited Product</a></li>
            <li><a href="bestSellingProduct.php">Best Selling Product</a></li>
            <li><a href="leastSellingProduct.php">Least Selling Product</a></li>
            <li><a href="runningoutofstock.php">Running Out of Stock Product</a></li>
            <li><a href="badproducts.php">Bad Rated Product</a></li>
            <li><a href="income.php">Total Income</a></li><br>
        </ul>
			</td>
		<td valign="top" width="" >
					<img src="../res/products/home.jpg" align="left" align="top" width="100%"/>
					
					<table align="left" width="100%" >
					<tr><td><br></td></tr>
						<tr>
						
						<td>
							<img src="../res/products/images.jpg"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp; <a href="../visitor/select persons male.php"> Men's Item </a> </h3>
						</td>
						<td>
							<img src="../res/products/female.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../visitor/select persons female.php"> Female's Item </a> </h3>
						</td>
				        <td>
							<img src="../res/products/cutmypic.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../visitor/select persons kids.php"> kids's Item </a></h3>
							
						</td>
				        <td>
							<img src="../res/products/accessories.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../visitor/accessories.php"> Accessories </a></h3>
						</td>
				        <td>
							<img src="../res/products/electronics.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../visitor/electronics.php"> Electromics</a></h3>
						</td>
							
							
						</tr>
						<tr align="center">
						
						<td align="center">
							<a href="allProducts.php"><input type="submit" value="Edit"/></a>
						</td>
						<td>
							<a href="allProducts.php"><input type="submit" value="Edit"/></a>
						</td>
				        <td>
							<a href="allProducts.php"><input type="submit" value="Edit"/></a>
						</td>
				        <td>
							<a href="allProducts.php"><input type="submit" value="Edit"/></a>
						</td>
				        <td>
							<a href="allProducts.php"><input type="submit" value="Edit"/></a>
						</td>
														
						</tr>

						<tr>
						<td><br></td>
						</tr>
						
						<tr>
						<br><br>
							<td><h2><font color="red" >Sales Upto 80%</font></h2>
							<td  align="center">
							<a href="editdiscount.php"><input type="submit" value="Edit Discount"/></a>
							
							</td>
							</td>
						</tr>
						<tr>
						<td><br></td>
				        </tr>
						<tr>
						<td>
							<img src="../res/products/bag.jpg"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Shoulder bag</a></h3>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<font color="red" >Discount 80%</font></h3>
						</td>
             			<td>
							<img src="../res/products/shoe.jpg"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Casual shoe</a></h3>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<font color="red" >Discount 40%</font></h3>
						</td>
						</tr>
						<tr align="center">
						<td>
							<a href="editdiscount.php"><input type="submit" value="Edit"/></a>
						</td>
             			<td>
							<a href="editdiscount.php"><input type="submit" value="Edit"/></a>
						</td>
						</tr>

						<tr>
						<td><br><br></td>
						</tr>
						<tr>
						<br><br>
				         <td width="300"><h2><font color="red" >Top Selling Products</font></h2>
						
						 
						 </td>
						</tr>
						<tr>
						<td width="300"><br></td>
                       </tr>

                       <tr id="topsellingproducthome">
						<td width="250">
							<img src="../res/products/pic.jpg"  width="150">
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Printed Tops</a></h3>
							

						</td>
						<td width="250">
							<img src="../res/products/watch.jpg"  width="150">
							<h3><a href="">Fashionable watch</a></h3>
						</td>				
						<td width="250">
							<img src="../res/products/lipstic.jpg"  width="150">
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Lipstic Set</a></h3>
						</td>
						<td width="250">
							<img src="../res/products/hijab.jpg"  width="150">
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Hijab</a></h3>
						</td>
						</tr>
            			<tr>
						<td><br><br></td>
						</tr>


					</table>
			
			</td>
		</tr>
		<tr align="center">
			<td colspan="3">
				<h4>Copyright © 2017</h4>
			</td>
		</tr>
	</table>
</body>
</html>
