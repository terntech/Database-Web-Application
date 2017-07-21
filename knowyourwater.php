<html>
    <head>
        <title>Tern: Know Your Water</title>
	<link rel="stylesheet" type="text/css" href="CSS/main.css" media="screen" />
    </head>

    <body>
    <div id="page">
        <div id="header">
            <h3>Know Your Water Form</h3>
		</div>
		
		<div id="nav">
		<ul id="menu">
			<li><a href="index.php">ADD CUSTOMER</a></li>
                        <li><a href="knowyourwater.php">KNOW YOUR WATER</a></li>
                        <li><a href="customer_control.php">CUSTOMER LOOKUP</a></li>
		</ul>
		</div>
		
		<div id="content">
                    <label>CustomerID:</label>
                    <input type="input" value="f_name" readonly />
                    <br />

                    <label>PH:</label>
                    <input type="input" name="ph" />
                    <br />

                    <label>TDS (ppm):</label>
                    <input type="input" name="tds" />
                    <br />

                    <label>Lead (ppb):</label>
                    <input type="input" name="address2" />
                    <br />	
                    
                    <label>Chlorine:</label>
                    <input type="input" name="zipcode" />
                    <br />

                    <label>Chloride:</label>
                    <input type="input" name="phone" />
                    <br />

                    <label>Hardness:</label>
                    <input type="input" name="age" />
                    <br />
                    
                    <label>Flouride:</label>
                    <input type="input" name="residents" />
                    <br />
                    
                    <label>&nbsp;</label>
                    <input type ="submit" value='Submit'/>
                        
		</div>
		
		
	
        <div id="footer">
            <p class="copyright">
                &copy; <?php echo date("Y"); ?> Tern Water Inc.
            </p>
        </div>
    </div>
	
    </body>
</html>