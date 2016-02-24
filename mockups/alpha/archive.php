<!doctype html>
<html class="no-js" lang="">
    <head>

        <?php require('inc/head.inc.php'); ?>
        <title></title>

    </head>
    <body class="archive">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



        <?php require('inc/header.inc.php'); ?>


        

        <!-- Add your site or application content here -->
        

        <div class="container-fluid">


        	<h1>Resources/Publications</h1>


            <div class="row bottom-buffer">
<?php for ($i=0; $i < 12; $i++): ?>
    
              <div class="col-md-6">
                <div class="block-article">

                    <a href="post.php">
                    	<img src="http://lorempixel.com/500/200/" class="img-responsive" alt="Responsive image">
                    </a>

                    <h3>
                        <a href="post.php">Publication or Resource</a>
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <a href="#" class="more">Read more &rarr;</a>
                
                </div>


              </div>
<?php endfor; // ($i=0; $i < 4; $i++): ?>

            </div>
        </div>

        <?php require('inc/footer.inc.php'); ?>



    </body>
</html>
