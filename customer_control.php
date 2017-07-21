<html>
    <head>
        <title>Customer Lookup</title>
	<link rel="stylesheet" type="text/css" href="CSS/main.css" media="screen" />
    </head>

    <body>
    <div id="page">
        <div id="header">
            <h3>Customer Lookup</h3>
         </div>		
		<div id="nav">
		<ul id="menu">
			<li><a href="index.php">ADD CUSTOMER</a></li>
                        <li><a href="knowyourwater.php">KNOW YOUR WATER</a></li>
                        <li><a href="customer_control.php">CUSTOMER LOOKUP</a></li>
		</ul>
		</div>
		
		<div id="content">
                <?php
                        require('customerdatabase.php');
                        require('customer_db.php');

                    $customers = get_customers();  
                ?>
                    <div id ="content_table">
                        <table>
                        <tr>
                            <th>CustomerID:</th>
                            <th>AmbassadorID:</th>
                            <th>First Name:</th>
                            <th>Last Name:</th>
                            <th>Address1:</th>
                            <th>Address2:</th>
                            <th>Zip Code:</th>
                            <th>Email:</th>
                            <th>Phone:</th>
                            <th>Age:</th>
                            <th>Residents In House:</th>
                            <th>Date Enrolled:</th>
                        </tr>
                        <?php $customers->setFetchMode(PDO::FETCH_ASSOC);
                            foreach ($customers as $customer){
                            print " <tr> ";
                            foreach ($customer as $name=>$value){
                            print " <td>$value</td> ";
                            } // end field loop
                            print " </tr> ";
                            } // end record loop
                            print "</table> ";
                         ?>
                        </table>
                    </div>
		</div>
	
        <div id="footer">
            <p class="copyright">
                &copy; <?php echo date("Y"); ?> Tern Water Inc.
            </p>
        </div>
    </div>
	
    </body>
</html>