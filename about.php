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
  <body id="about">
    <section class="container">
      <div class="content row">
        <section class="col-lg-12">
          <?php include "_/components/php/header.php" ?>
        </section><!-- header -->
          <section class="main col-lg-12">
            <h4 class="orange bold uppercase">About Us</h4>
            <div class="padding"></div>
<p><span class="bold">Ocean Blue Medical Research Center</span> is a multi-specialty clinical research center who conducts clinical trials from Phase I to Phase IV. These studies involve, among many other, therapeutic areas such as: Cardiology, Neurology, Psychiatry, Internal Medicine, Dermatology, Endocrinology, Infectious disease, Rheumatology and Women's health.</p>
<div class="padding"></div>
</section>

<div class="content row">
<section class="main col-lg-3 col-md-4 col-sm-6 col-sx-1">
<h4 class="blue uppercase">Our Mission</h4>
<p>Provide our sponsors with competent and professional care to develop clinical research with excellence. Our core is to deliver clinical research data on a timely, accurate and efficient manner to comply with protocol adherence and guidelines.</p>
</section>

<section class="col-lg-3 col-md-4 col-sm-6 col-sx-1">
<h4 class="blue uppercase">Vision</h4>
<p>We strive in becoming a highly recognized clinical research center and improve people's health through the conduction of studies in accordance to the highest standard of excellence for our sponsors and CROs.</p>
</section>

<section class="col-lg-3 col-md-4 col-sm-6 col-sx-1">
<h4 class="blue uppercase">Expertise</h4>
<p>Our principals and investigator have more than 40 years of combined experience working specifically in the health care area as well as realizing clinical trials, either for pharmaceuticals, cosmetics or new technological advances and its direct incidence in human health.</p>
</section>
<section class="col-lg-3 col-md-4 col-sm-6 col-sx-1">
<h4 class="blue uppercase">Our Advantages</h4>
<p>Our mission and experience combined with a great location, proper facility and a great team of specialists and superb healthcare professionals, have put <span class="bold">Ocean Blue Medical Research Center</span> at the top of all other research centers across South Florida.</p>
</section>

</div>


<div class="padding"></div>
          </section><!-- main -->

      </div><!-- content -->
          <?php include "_/components/php/footer.php" ?>
    </section><!-- container -->
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>