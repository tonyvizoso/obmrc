<?php require_once("_/componetes/php/remote.php"); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_remote, $remote);
$query_staffRecordset = "SELECT * FROM staff ORDER BY id ASC";
$staffRecordset = mysql_query($query_staffRecordset, $remote) or die(mysql_error());
$row_staffRecordset = mysql_fetch_assoc($staffRecordset);
$totalRows_staffRecordset = mysql_num_rows($staffRecordset);
?><!--PHP MySQL connection here -->

<div class="content row">

<section class="col-lg-3 col-md-4 col-sm-6 col-xs-1">
  <ul class="nospace clear">
              <?php do { ?>
                <li class="one_quarter">
                  <div class="staff_container">
                  <figure class="team-member"><img src="<?php echo $row_staffRecordset['image']; ?>" alt="<?php echo $row_staffRecordset['name']; ?>">
                    <figcaption>
                      <p class="team-name"><?php echo $row_staffRecordset['name']; ?> <?php echo $row_staffRecordset['suffix']; ?></p>
                      <p class="team-title"><?php echo $row_staffRecordset['job-title']; ?>
                      <br><a href="<?php echo $row_staffRecordset['email_link']; ?>"><?php echo $row_staffRecordset['email']; ?></a></p>
                      <p class="team-title"><a href="mailto:info@obmedicalresearch.com">Request C.V.</a></p>
                      
                    </figcaption>
                  </figure>
                  </div>
                </li>
                <?php } while ($row_staffRecordset = mysql_fetch_assoc($staffRecordset)); ?>
            </ul>

</section>

<section class="col-lg-3 col-md-4 col-sm-6 col-sx-1">
<img src="http://www.obmedicalresearch.com/images/staff/yanet-r-ferrera.jpg" class="img-responsive-half" alt="Yanet R. Ferrera">
<figcaption>
<p class="bold">Yanet R. Ferrera, BS, CCRP.</p>
<p>President & CEO<br>
<a href="mailto:yanetr@obmedresearch.com">yanetr@obmedresearch.com</a></p>
<p><a href="mailto:info@obmedicalresearch.com">Request C.V.</a></p>
</figcaption><!-- Yanet R. Ferrera -->
</section>

<section class="col-lg-3 col-md-4 col-sm-6 col-sx-1">
<img src="http://www.obmedicalresearch.com/images/staff/antonio-e-terrelonge.jpg" class="img-responsive-half" alt="Antonio E. Terrelonge,">
<figcaption>
<p class="bold">Antonio E. Terrelonge, MD.</p>
<p>Board Certified in Internal Medicine<br>
Principal Investigator<br>
Director of Medical Research<br><a href="mailto:antoniot@obmedresearch.com">antoniot@obmedresearch.com</a></p>
<p><a href="mailto:info@obmedicalresearch.com">Request C.V.</a></p>
</figcaption>
</section><!-- Antonio E. Terrelonge -->

<section class="col-lg-3 col-md-4 col-sm-6 col-sx-1">
<img src="http://www.obmedicalresearch.com/images/staff/ever-varela.jpg" class="img-responsive-half" alt="Heber L. Varela">
<figcaption>
<p class="bold">Heber L. Varela, MD.</p>
<p>Board Certified in Neurology<br>
Principal Investigator<br>
Director of Medical Research<br><a href="mailto:heberv@obmedresearch.com">hebervt@obmedresearch.com</a></p>
<p><a href="mailto:info@obmedicalresearch.com">Request C.V.</a></p>
</figcaption>
</section><!-- Heber L. Varela -->

<section class="col-lg-3 col-md-4 col-sm-6 col-sx-1">
<img src="http://www.obmedicalresearch.com/images/staff/guari-mascaro.jpg" class="img-responsive-half" alt="Guari Mascaro">
<figcaption>
<p class="bold">Guari Mascaro, MD.</p>
<p>Principal Investigator<br>
Psychiatry Department <br>
<a href="mailto:guarim@obmedresearch.com">guarim@obmedresearch.com</a></p>
<p class="team-title"><a href="mailto:info@obmedicalresearch.com">Request C.V.</a></p>
</figcaption>
</section><!-- Guari Mascaro -->

</div>