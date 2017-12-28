<?php include "../../data/product_access.php"; ?>

<?php
  
        
        $order= adminpending();
        session();
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pending Deliveries</title>
</head>
<body width="1200">
    <table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="2">
                <table border="0">
                    <tr align="center">
                        <td width="230" height="100">
                            <a href="loggedin.php"><img src="../res/common/ali.png" alt="Alibaba" width="200" ></a>
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
            <td valign="top" height="400" align="center">
                 <table border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <th align="center"><label><h3>Pending Deliveries</h3></label></th>
            </tr>
        </table>

        <table align="center" width="100%">
            <tr align="center"><br>
                <td>
                    <a href="orders.php"><input type="submit" value="All Orders" >
                </td>
                <td>
                    <a href="pending.php"><input type="submit" value="Pending Deleveries" >
                </td>
                <td>
                    <a href="neworders.php"><input type="submit" value="New Orders" >
                </td>
                <td>
                    <a href="cancelorders.php"><input type="submit" value="Cancelled Orders" >
                </td>
             <tr >
            <td ></td>

            
        <table align="center" width="100%">
            <tr align="center"><br>
                <td>
                    <label><h3>All Orders</h3></label>
                    
                </td>
                 <td>
                    <label><h3>Customer</h3></label>
                    
                </td>
                 <td>
                    <label><h3>Shipping Company</h3></label>
                </td>
                 <td>
                    <label><h3>Track</h3></label>
                </td>
                 <td>
                    <label><h3>Customer Confirmation</h3></label>
                </td>
            </tr>
                
                <table align="left" width="100%" >
                    <?php foreach ($order as $productn) { ?>
                    <tr>
                        <td>
                            <img src="pictures\<?=$productn['ppic'] ;?>" align="left" align="top" width="30%" height="100" ></td><td><h4><?=$productn['username']; ?></td> <br><td><?=$productn['shippingsts'] ;?></td><td><?=$productn['tracknumber'] ;?></td><td><?=$productn['customersts'] ;?></h4></td></a> 
                            </td>
                            <tr align="center">

                    <td>
                    <a href="track.php"><input type="button" value="Track">
                    </td>

                </tr>
                            
                        </tr>
                    <?php } ?>  
                    </table>
                
            </tr>


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
