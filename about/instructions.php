<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Setup Instructions</title>

    <!-- Bootstrap Core CSS -->
    <link href="/servicegoat/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/servicegoat/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

       <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/servicegoat/index.html">
                        Home
                    </a>
                </li>
                <li><a href="/servicegoat/about/">About</a></li>
                <li><a href="/servicegoat/about/instructions.php">Setup instructions</a></li>
                <li><a href="/servicegoat/appinfo.php">PHP Information</a></li>
        
                                <li class="sidebar-brand">
                    <a href="/servicegoat/vulnerabilities/">
                        Vulnerabilities
                    </a>
                <li><a href="/servicegoat/vulnerabilities/wsdlenum/">WSDL Enumeration</a></li>
                <li><a href="/servicegoat/vulnerabilities/xmlbomb/xmlbomb.php">XML Bomb Denial-of-Service</a></li>
                <li><a href="/servicegoat/vulnerabilities/xxe/">XML External Entity Injection</a></li>
                <li><a href="/servicegoat/vulnerabilities/xpath/xpath.php">XPATH Injection</a></li>
                <li><a href="/servicegoat/vulnerabilities/cmdi/client.php">Command Injection</a></li>
                <li><a href="/servicegoat/vulnerabilities/xst/xst.php">Cross Site Tracing (XST)</a></li>
                <li><a href="/servicegoat/vulnerabilities/ssrf/">Server Side Request Forgery</a></li>
                <li><a href="/servicegoat/vulnerabilities/sqli/">REST API SQL Injection</a></li>
				   <li><a href="/servicegoat/vulnerabilities/xxe2/">XML External Entity Injection 2</a></li>
                
            </ul>
            
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Setup Instructions</h1>
                        <p><br>This app can be used with a XAMPP setup. XAMPP is a free and open source cross-platform web server solution which mainly consists of an Apache Web Server and MySQL database. </p>



                        <p>Click on the 'Create / Reset Database' button below to create or reset your database. If the database already exists, it will be cleared and all data will be reset. Incase of any MySQL Access denied error, make necessary changes in the <b>servicegoat/instructions.php</b> for database connection.</p>
                 
                        
                   
	<form action="<?php $_PHP_SELF ?>" method="post">
		<input name="create_db" type="submit" value="Reset Database">

	</form>
	
</body>

</html>
<?php
   if (isset( $_POST["create_db"])) {
//connect to database. Make necessary changes to $connect for successful connection   
		$connect =  new mysqli('localhost', 'root', '');
		if ($connect->connect_error) {
		die("Connection failed<br> " . $conn->connect_error);
		} 
//delete previous database	
        $drop_db = "DROP DATABASE servicegoat";
        
		if ($connect->query($drop_db) === TRUE) {
			echo "<br>Database deleted successfully <br>";
		} else {
			echo "Error deleting database <br> " . $connect->error;
		}
//create new database			
		$create_db = "CREATE DATABASE servicegoat";

		if ($connect->query($create_db) === TRUE) {
			echo "Database created successfully <br>";
		} else {
			echo "Error creating database <br> " . $connect->error;
		}

		$connect =  new mysqli('localhost', 'root', '','servicegoat');

		$create_tb = "CREATE TABLE users
		(
		id int,
		first_name varchar(15),
		last_name varchar(15),
		secret varchar(15)
		)";

		if ($connect->query($create_tb) === TRUE) {
		echo "Tables created successfully <br>";
		} else {
			echo "Error creating tables <br>" . $connect->error;
		}


		$insert = "INSERT INTO `users` VALUES
		('1','Darth','Vader','039498utr'),
		('2','Gordon','Brown','fgkjiu4h54'),
		('3','Hack','Me','1337'),
		('4','Pablo','Picasso','34sdfrsdgf'),
		('5','Kylo','Ren','34sdfrsdgf'),
		('6','Anakin','Skywaler','343425d33'),
		('7','Aaron','Unknown','34434222'),
		('8','Bob','Smith','5jhgjdyh3343')";
	
		if ($connect->query($insert) === TRUE) {
			echo "Data inserted successfully <br>";
		} else {
			echo "Error inserting data <br> " . $connect->error;
			}

		$connect->close();
	}
?>


