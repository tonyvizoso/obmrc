<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $pagetitle="Ocean Blue Medical Research"?>
      <title>
        <?php echo $pagetitle ?> | <?php if (basename(__FILE__) == 'file_name.php') {
          //Hide
          } else {
          //show
          }
        ?>
        <?php
          echo ucwords( str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF']) ) )/* The PHP inside title tags, returns The Current PHP File Name w/o hiphens and file extension */ 
        ?>
    </title>
<!--Title tag END here-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">
  </head>
  <body id="career-opportunities">
<section class="container">
      <div class="content row">
        <section class="col-lg-12">
          <?php include "_/components/php/header.php" ?>
        </section><!-- header -->
          <section class="main col col-lg-12">

          <?php include "page_content/staff-content.php" ?>
          </section><!-- main -->
          
      </div><!-- content -->
          <?php include "_/components/php/footer.php" ?>
    </section><!-- container -->
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>