
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>Tern</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">
        <div id="header">
            <h1>Tern Whoops</h1>
        </div>

        <div id="main">
            <h2 class="top">Error</h2>
            <p><?php 
                    if( ($errors = sqlsrv_errors() ) != null) {
                        foreach( $errors as $error ) {
                        echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
                        echo "code: ".$error[ 'code']."<br />";
                        echo "message: ".$error[ 'message']."<br />";
                        }
                    }
                    else {
                        echo $error;
                    }
                    
                    
                    ; ?></p>
        </div>

        <div id="footer">
            <p class="copyright">
                &copy; <?php echo date("Y"); ?> Tern Water Inc.
            </p>
        </div>

    </div><!-- end page -->
</body>
</html>