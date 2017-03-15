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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
                <div align="left">
                   <!-- <img class="header-img" src="img/corner.png" alt=""> -->
                 <?php  echo $this->Html->image('corner.png') ; ?>
                </div>
                <div align="right">
                    <ul class="nav navbar-nav">
                  <!-- This should bring us to a blank page where we can begin to fill in the details of a new project ONLY if the user is of certain permissions--> 
                        <li>
                             <a href="http://localhost/cakephp-2.2.4/Projects/add">New</a>
                        </li>
                        <!-- This should bring us to a page with a list of the applications as seen in the mock ups -->
                        <li>
                            <a href="http://localhost/cakephp-2.2.4/Projects/viewProjects">Projects</a>
                        </li>
                         <li>
                            <a href="http://localhost/cakephp-2.2.4/Projects/viewOwnedProjects">Owned Projects</a>
                        </li>
                        <!-- this should bring us to the archive page as seen in the -->
                        <li>
                            <a href="http://localhost/cakephp-2.2.4/Archives/viewArchives">Archive</a>
                        </li>
                        <li>
                        <!-- brings us to the user list-->
                            <a href="http://localhost/cakephp-2.2.4/Projects/viewStaff">Users</a>
                        </li>
                        <!-- brings us to the current users profile, we probs need some sort of log in? or do we have it done via cookies?-->
                        <li>
                            <a href="http://localhost/cakephp-2.2.4/Projects/viewProfile">Profile</a>
                        </li>
                        <li>
                            <a href="http://localhost/cakephp-2.2.4/Users/logout">logout</a>
                        </li>
                    </ul>
                </div>
                </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        <div>
            <input type="search" class="form-control" placeholder="Enter a Search Querey here; such as a user or project" id="gen_search_ID">
        </div>
    </nav>
<!-- NAVBAR END-->
<!-- SEARCHBAR-->

<!--SEARCHBAR END-->
<!-- MAIN BODY-->
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <h2> <strong>  <?php echo $title ; ?> </strong></h2>  
                    <small> <?php echo $text ; ?>  </small>
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
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="https://www.leidos.com/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>
</html>
