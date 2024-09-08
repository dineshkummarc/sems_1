<?php
require_once("../include/initialize.php");
//   if(!isset($_SESSION['USERID'])){
//   redirect(web_root."index.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Event Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo web_root; ?>css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo web_root; ?>css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo web_root; ?>css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
 
   <link href="<?php echo web_root; ?>css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">
 
 <link href="<?php echo web_root; ?>css/costum.css" rel="stylesheet">
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
    <div class="row">
        <h2 align="center">Tally of Votes</h2> 
    </div> 
    <div class="row"  style="padding-bottom:10px">
        <?php
         
            # code...
              echo "<h4 align='center'> As of ".  date('m/d/Y - h:i') ."</h4>";
         
        ?>
      </div>
    <div class="row">
    
        <div class="col-lg-12">  

             
             <table class="table_print"> 
                  <tr><th colspan="2"><h4 align="center">President</h4></th></tr>
                  <tr>
                    <th  width="600px">Name</th>
                    <th  width="100px">No. of Votes</th>
                  </tr>

                   <?php  

                   $sql ="SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID` 
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
                          AND `Position`='President' ORDER BY TotalVotes asc";
                  $presRes = mysql_query($sql) or die(mysql_error());
                  while ($row = mysql_fetch_array($presRes)) {
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row['Lastname'].', '.$row['Firstname'].'</td>';
                     echo '<td class="col-lg-3">' . $row['TotalVotes'].'</td>';
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
                          AND `Position`='Vice-President' ORDER BY TotalVotes asc";
                  $presRes = mysql_query($sql) or die(mysql_error());
                  while ($row = mysql_fetch_array($presRes)) {
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row['Lastname'].', '.$row['Firstname'].'</td>';
                     echo '<td class="col-lg-3">' . $row['TotalVotes'].'</td>';
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
                          AND `Position`='Secretary' ORDER BY TotalVotes asc";
                  $presRes = mysql_query($sql) or die(mysql_error());
                  while ($row = mysql_fetch_array($presRes)) {
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row['Lastname'].', '.$row['Firstname'].'</td>';
                     echo '<td class="col-lg-3">' . $row['TotalVotes'].'</td>';
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
                          AND `Position`='Treasurer' ORDER BY TotalVotes asc";
                  $presRes = mysql_query($sql) or die(mysql_error());
                  while ($row = mysql_fetch_array($presRes)) {
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row['Lastname'].', '.$row['Firstname'].'</td>';
                     echo '<td class="col-lg-3">' . $row['TotalVotes'].'</td>';
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
                          AND `Position`='Senator' ORDER BY TotalVotes desc";
                  $presRes = mysql_query($sql) or die(mysql_error());
                  while ($row = mysql_fetch_array($presRes)) {
                    # code...
                    $no = 0+1;
                     echo '<tr>';
                     echo '<td class="col-lg-8">' .$row['Lastname'].', '.$row['Firstname'].'</td>';
                     echo '<td class="col-lg-3">' . $row['TotalVotes'].'</td>';
                     echo '</tr>';

                    }
                    ?>


                   </table>

  
         
        </div> 
      </div>
          
 
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
<footer>
  <?php  ?>
</footer>
</html>
