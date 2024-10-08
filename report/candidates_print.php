<?php
require_once("../include/initialize.php");
  if(!isset($_SESSION['ACCOUNT_ID'])){
  redirect(web_root."index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Event Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?php echo web_root; ?>css/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/main.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/responsive.css" rel="stylesheet">

    <link href="<?php echo web_root; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
<!-- // <script src="<?php echo web_root; ?>select2/select2.min.css"></script> ./ -->

<!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">


<link rel="stylesheet" href="<?php echo web_root; ?>select2/select2.min.css">

<link href="<?php echo web_root; ?>css/nav-button-custom.css" rel="stylesheet" media="screen">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h4 class="page-header ">
          <i class="fa fa"></i>School Event Management System
           <small class="pull-right">Printed Date: <?php echo date('m/d/Y'); ?></small>
        </h4>
      </div>
      <!-- /.col -->
    </div>
          <div class="center wow fadeInDown"> 
                  <h2 class="page-header">Line-up of Candidates</h2>  
                  <p class="lead"><?php echo isset($_POST['PartyList']) ? $_POST['PartyList'] : '' ; ?> </p>
            </div>
 
                <div class="features">
                <?php if (isset($_POST['PartyList'])) {
                  # code...
                 ?>
                <table class="table_print">
                   <tr>
                    <th  width="600px">Name</th> 
                  </tr>
                  <tr><th colspan="2"><h4 align="center">President</h4></th></tr>
                  

                   <?php  

                   $sql ="SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID` 
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
                          AND `Position`='President' AND PartyList='".$_POST['PartyList']."' ORDER BY Lastname asc";
                  $presRes = mysql_query($sql) or die(mysql_error());
                  while ($row = mysql_fetch_array($presRes)) {
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row['Lastname'].', '.$row['Firstname'].'</td>'; 
                     echo '</tr>';

                    }
                      ?>


                  
                  <tr>
                    <td colspan="2"><h4 align="center">Vice-President</h4></td>
                  </tr> 
                   <?php  

                   $sql ="SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID` 
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
                          AND `Position`='Vice-President' AND PartyList='".$_POST['PartyList']."' ORDER BY Lastname asc";
                  $presRes = mysql_query($sql) or die(mysql_error());
                  while ($row = mysql_fetch_array($presRes)) {
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row['Lastname'].', '.$row['Firstname'].'</td>'; 
                     echo '</tr>';

                    }
                    ?>

                  <tr>
                    <td colspan="2"><h4 align="center">Secretary</h4></td>
                  </tr> 
                   <?php  

                   $sql ="SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID` 
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
                          AND `Position`='Secretary' AND PartyList='".$_POST['PartyList']."' ORDER BY Lastname asc";
                  $presRes = mysql_query($sql) or die(mysql_error());
                  while ($row = mysql_fetch_array($presRes)) {
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row['Lastname'].', '.$row['Firstname'].'</td>'; 
                     echo '</tr>';

                    }
                    ?>

                    <tr>
                  <td colspan="2"><h4 align="center">Treasurer</h4></td>
                  </tr> 
                   <?php  

                   $sql ="SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID` 
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
                          AND `Position`='Treasurer' AND PartyList='".$_POST['PartyList']."' ORDER BY Lastname asc";
                  $presRes = mysql_query($sql) or die(mysql_error());
                  while ($row = mysql_fetch_array($presRes)) {
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row['Lastname'].', '.$row['Firstname'].'</td>'; 
                     echo '</tr>';

                    }
                    ?>

                    <tr>
                  <td colspan="2"><h4 align="center">Senators</h4></td>
                  </tr> 
                   <?php  

                   $sql ="SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID` 
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
                          AND `Position`='Senator' AND PartyList='".$_POST['PartyList']."' ORDER BY TotalVotes desc";
                  $presRes = mysql_query($sql) or die(mysql_error());
                  while ($row = mysql_fetch_array($presRes)) {
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row['Lastname'].', '.$row['Firstname'].'</td>'; 
                     echo '</tr>';

                    }
                    ?>


                   </table>
                  <?php }else{
                    echo "<h2 class='center'>No Record</h2>";
                    } ?>
                 </div><!--/.services--> 
          
 
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
<footer>
  <?php  ?>
</footer>
</html>
