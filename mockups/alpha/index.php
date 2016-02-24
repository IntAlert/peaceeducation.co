<?php

$featuredContentTitles = [
    
    'Featured Publication or Resource',
    'Featured Publication or Resource',
    'Featured Publication or Resource',
    'Invitation for content submission?',

];

?>
<!doctype html>
<html class="no-js" lang="">
    <head>

        <?php require('inc/head.inc.php'); ?>
        <title></title>

    </head>
    <body class="home">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



        <?php require('inc/header.inc.php'); ?>


        

        <!-- Add your site or application content here -->
        

        <div class="container-fluid">


            <div class="row bottom-buffer">
                <div class="col-md-9">
                    <h2>PeaceEducation.co</h2>
                    <p>Community of practice website, content created by practitioners, curated by International Alert, etc, etc...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        <a href="archive.php">Publications</a>
                        and 
                        <a href="archive.php">Resources</a>
                        sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>


                    <div class="newsletter-cta">

                        <form class="form-inline">
                          <div class="form-group">
                            <label for="exampleInputEmail2">Sign up for updates. Our partners are constantly adding new content:</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                          </div>
                          <button type="submit" class="btn btn-default">Sign up</button>
                          
                        </form>
                    </div>

                </div>

                <div class="col-md-3">
                    <img src="http://lorempixel.com/300/300/" class="img-responsive" alt="Responsive image">

                </div>


            </div>






            <div class="row bottom-buffer">
<?php for ($i=0; $i < 4; $i++): ?>
    
              <div class="col-md-3">
                <div class="block-featured">

                    <img src="http://lorempixel.com/500/200/" class="img-responsive" alt="Responsive image">
                    <h3>
                        <a href="post.php"><?php echo $featuredContentTitles[$i]; ?></a>
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <a href="post.php" class="more">Read more &rarr;</a>
                
                </div>


              </div>
<?php endfor; // ($i=0; $i < 4; $i++): ?>

            </div>


            <div class="row">
              <div class="col-md-8">
                <div class="block-featured-wide">

                    <div class="col-md-6">
                        <img src="http://lorempixel.com/500/600/" class="img-responsive" alt="Responsive image">
                    </div>
                    <div class="col-md-6">
                        <h3>
                            <a href="#">Main Featured Publication or Resource</a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </p>
                        <a href="#" class="more">Read more &rarr;</a>
                    </div>
                </div>

              </div>
              <div class="col-md-4">
                <div class="block-featured block-int-alert">
                    <img src="http://lorempixel.com/500/200/" class="img-responsive" alt="Responsive image">

                    <h3>
                        <a href="#">International Alert</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>

                    <a href="#" class="more">Read more &rarr;</a>

                </div>
              </div>
            </div>
        </div>

        <?php require('inc/footer.inc.php'); ?>



    </body>
</html>
