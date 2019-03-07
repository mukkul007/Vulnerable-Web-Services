

<?php
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Services by MK</title>

      <?php require("".dirname(__FILE__)."/bootstrap.php") ?>

</head>

<body>
      <!-- Sidebar -->
    <div id="wrapper">

      <div class="col-md-3">
      <?php require("".dirname(__FILE__)."/sidebar.php") ?>
</div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Web Services by MK</h1>
                        <p>In the modern web, Web Services are the backbone of a Web application. Furthermore, Web Services can be implemented in numerous ways using SOAP and REST protocols. Understanding how to implement these services securely can be trivial for developers due to the broad range of attack surface.</p>
                        <p>The aim of this project is to help security professionals learn about Web Application Security through the use of a practical lab environment.</p>


                    <p align="justify">
                        This application includes the following vulnerabilities.
                        <ul>
                            <li>WSDL Enumeration</li>
                            <li>XML External Entity Injection</li>
                            <li>XML Bomb Denial-of-Service</li>
                            <li>XPATH Injection </li>
                            <li>WSDL Scanning</li>
                            <li>Cross Site-Tracing</li>
                            <li>OS Command Injection</li>
                            <li>Server Side Request Forgery</li>
                            <li>SQL Injection</li>
                            <li>Same Origin Method Execution</li>
                            <li>JSON Web Token (JWT) Secret Key Brute Force</li>
                            <li>Cross-Origin Resource Sharing</li>
                        </ul>


                     
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
