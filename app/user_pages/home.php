<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location:../account/login.php");
	}
		if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['usertype']!="user")
		{
				header("location:../account/login.php");
		}
	}
?>

<html>
<form method="post">
<head><title>Home</title></head>

	<table align="center" width="1200" >
	
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
		<td></td>
			
			<td valign="top" width="40%" >
					<img src="pictures\home.jpg" align="left" align="top" width="100%" >
					
					<table align="left" width="100%" >
					<tr>
					<tr><td><br></td></tr>
						<tr>

						<td>
							<img src="pictures\images.jpg"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp; <a href="select persons male.php"> Men's Item </a> </h3>
						</td>
						<td>
							<img src="pictures\female.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="select persons female.php"> Female's Item </a> </h3>
						</td>
							<td>
							<img src="pictures\cutmypic.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="select persons kids.php"> kids's Item </a></h3>
						</td>
							<td>
							<img src="pictures\accessories.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="accessories.php"> Accessories </a></h3>
						</td>
							<td>
							<img src="pictures\electronics.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="electronics.php"> Electromics</a></h3>

						</td>
						
						</tr>

						<tr>
						<td>

							<br><br>
							
							</td>
						</tr>


						<tr>

						<br>
						<br>
							<td><h2><font color="red" >Sales Upto 80%</font></h2></td>
						</tr>
						<tr>
						<td>

							<br>
							
							</td>
							</tr>

						<tr>
						<td>
							<img src="pictures\bag.jpg"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Shoulder bag</a></h3>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<font color="red" >Discount 80%</font></h3>

						</td>

						<td>
							<img src="pictures\shoe.jpg"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Casual shoe</a></h3>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<font color="red" >Discount 40%</font></h3>

						</td>

						</tr>

						<tr>
						<td>

							<br><br>
							
							</td>
						</tr>

						<tr>

						<br>
						<br>
							<td width="300"><h2><font color="red" >Top Selling Products</font></h2></td>
						</tr>
						<tr>
						<td width="300">

							<br>
							
							</td>

</tr>

                       <tr>
						<td width="250">
							<img src="pictures\pic.jpg"  width="150">
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Printed Tops</a></h3>
							

						</td>

						<td width="250">
							<img src="pictures\watch.jpg"  width="150">
							<h3><a href="">Fashionable watch</a></h3>
						</td>

						

						<td width="250">
							<img src="pictures\lipstic.jpg"  width="150">
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Lipstic Set</a></h3>
						</td>

						

						<td width="250">
							<img src="pictures\hijab.jpg"  width="150">
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Hijab</a></h3>
						</td>


						</tr>

						<tr>
						<td>

							<br><br>
							
							</td>
						</tr>

						</tr>


					
			</td>
			
	</tr>
			
			<tr height="100">
				<th colspan="4">
					<a href="aboutus.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="learnmore.php">Learn more</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="license.php">License</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</th>
			</tr>	
		
		
	
	
	
	
	</table>
<form >

</html>