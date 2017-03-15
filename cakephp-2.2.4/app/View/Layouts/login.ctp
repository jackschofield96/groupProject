<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ; ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        //bootstrap code
        echo $this->Html->css('bootstrap.min') ;
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('business-casual');
        echo $this->Html->script('bootstrap');
        echo $this->Html->script('business-casual');


    ?>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Leidos</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="header_nav">
                <div align="left">
                    <?php echo $this->Html->image('corner.png') ; ?>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>
<!-- NAVBAR END-->
<!-- SEARCHBAR-->

<!--SEARCHBAR END-->
<!-- MAIN BODY-->
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <h2> <strong>Leidos Personnel Site</strong></h2>  
                    <small>Please login for access.</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">  
                <div class="col-lg-12">
                     <?php echo $this->Session->flash(); ?>

                     <?php echo $this->fetch('content'); ?>
                  </div>
            </div>
        </div>
     </div>
    <!-- /.container -->
    <!-- MAIN BODY END-->

    
    <!-- FOOT-->
    <footer>
        <div class="boxP">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="https://www.leidos.com/contact">Contact</a>
                    </li>
                    </ul>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
