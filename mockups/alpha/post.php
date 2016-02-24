<!doctype html>
<html class="no-js" lang="">
    <head>

        <?php require('inc/head.inc.php'); ?>
        <title></title>

    </head>
    <body class="post">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



        <?php require('inc/header.inc.php'); ?>


        

        <!-- Add your site or application content here -->
        

        <div class="container-fluid">

        	<ol class="breadcrumb" style="margin-bottom: 5px;">
			  <li><a href="/">Home</a></li>
			  <li><a href="/archive.php">Publications</a></li>
			  <li class="active">Resource/Publication</li>
			</ol>



			


            <div class="row">

    
              <div class="col-md-12">

                    <img src="http://lorempixel.com/1200/350/" class="img-responsive" alt="Responsive image">
                    <h1>
                        <a href="#">Publication or Resource</a>
                    </h1>
                    <h4>
                    	Published by <a href="#">Author Name</a> on DD/MM/YY
                    </h4>

<?php for ($i=0; $i < 4; $i++): ?>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

<?php endfor; // ($i=0; $i < 12; $i++): ?>
                
              </div>

            </div>
        </div>

        <?php require('inc/footer.inc.php'); ?>



    </body>
</html>
