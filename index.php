<html>
    <head>
        <title>Tern: Customer Creation</title>
	<link rel="stylesheet" type="text/css" href="CSS/main.css" media="screen" />
    </head>

    <body>
    <div id="page">
        <div id="header">
            <h3>Customer Form</h3>
            <form action="controller.php" method="post" id="add_customer_form">
               <input type="hidden" name="action" value="add_customer" />
        </div>
		
		<div id="nav">
		<ul id="menu">
			<li><a href="index.php">ADD CUSTOMER</a></li>
                        <li><a href="knowyourwater.php">KNOW YOUR WATER</a></li>
                        <li><a href="customer_control.php">CUSTOMER LOOKUP</a></li>
		</ul>
		</div>
		
		<div id="content">
                    <label>AmbassadorID:</label>
                    <input type="input" name="ambassadorid" />
                    <br />
                    
                    <label>First Name:</label>
                    <input type="input" name="f_name" />
                    <br />

                    <label>Last Name:</label>
                    <input type="input" name="l_name" />
                    <br />

                    <label>Address1:</label>
                    <input type="input" name="address1" />
                    <br />

                    <label>Address2:</label>
                    <input type="input" name="address2" />
                    <br />	
                    
                    <label>Zip Code:</label>
                    <input type="input" name="zipcode" />
                    <br />

                    <label>Phone Number:</label>
                    <input type="input" name="phone" />
                    <br />
                    
                    <label>Email:</label>
                    <input type="input" name="email" />
                    <br />

                    <label>Age:</label>
                    <input type="input" name="age" />
                    <br />
                    
                    <label>In House Residents:</label>
                    <input type="input" name="residents" />
                    <br />
                    
                    <label>&nbsp;</label>
                    <input type ="submit" value='Add Customer'/>
                        
		</div>
		
		
	
        <div id="footer">
            <p class="copyright">
                &copy; <?php echo date("Y"); ?> Tern Water Inc.
            </p>
        </div>
    </div>
	
    </body>
</html>