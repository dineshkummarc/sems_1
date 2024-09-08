
 <?php
   if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."index.php");
     }

?>
<style type="text/css">
.table_print {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table_print > thead > tr > th,
.table_print > tbody > tr > th,
.table_print > tfoot > tr > th,
.table_print > thead > tr > td,
.table_print > tbody > tr > td,
.table_print > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  /*border-top: 1px solid #ddd;*/
}
.table_print > thead > tr > th {
  vertical-align: bottom;
  /*border-bottom: 2px solid #ddd;*/
}
.table_print > caption + thead > tr:first-child > th,
.table_print > colgroup + thead > tr:first-child > th,
.table_print > thead:first-child > tr:first-child > th,
.table_print > caption + thead > tr:first-child > td,
.table_print > colgroup + thead > tr:first-child > td,
.table_print > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table_print > tbody + tbody {
  /*border-top: 2px solid #ddd;*/
}
.table_print .table_print {
  background-color: #fff;
}
</style>
 
      <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">SSG Election Winnes</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="row">
                <div class="features">
                <table class="table_print"> 
                 <tr>
                    <th  width="600px">Name</th>
                    <th  width="100px">No. of Votes</th>
                  </tr>
                  <tr><th colspan="2"><h4 align="center">President</h4></th></tr>
                 

                   <?php  

                   $sql ="SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID` 
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
                          AND `Position`='President' ORDER BY TotalVotes DESC LIMIT 1";
                   $mydb->setQuery($sql);
                  $cur = $mydb->loadResultList();

                  foreach ($cur as $row) { 
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row->Lastname.', '.$row->Firstname.'</td>';
                     echo '<td class="col-lg-3">' . $row->TotalVotes.'</td>';
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
                          AND `Position`='Vice-President' ORDER BY TotalVotes DESC LIMIT 1";
                  $mydb->setQuery($sql);
                  $cur = $mydb->loadResultList();

                  foreach ($cur as $row) { 
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row->Lastname.', '.$row->Firstname.'</td>';
                     echo '<td class="col-lg-3">' . $row->TotalVotes.'</td>';
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
                          AND `Position`='Secretary' ORDER BY TotalVotes DESC LIMIT 1";
                  $mydb->setQuery($sql);
                  $cur = $mydb->loadResultList();

                  foreach ($cur as $row) { 
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row->Lastname.', '.$row->Firstname.'</td>';
                     echo '<td class="col-lg-3">' . $row->TotalVotes.'</td>';
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
                          AND `Position`='Treasurer' ORDER BY TotalVotes DESC LIMIT 1";
                   $mydb->setQuery($sql);
                  $cur = $mydb->loadResultList();

                  foreach ($cur as $row) { 
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row->Lastname.', '.$row->Firstname.'</td>';
                     echo '<td class="col-lg-3">' . $row->TotalVotes.'</td>';
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
                          AND `Position`='Senator' ORDER BY TotalVotes DESC LIMIT 8";
                   $mydb->setQuery($sql);
                  $cur = $mydb->loadResultList();

                  foreach ($cur as $row) { 
                    # code...
                     echo '<tr>';
                     echo '<td class="col-lg-8">'.$row->Lastname.', '.$row->Firstname.'</td>';
                     echo '<td class="col-lg-3">' . $row->TotalVotes.'</td>';
                     echo '</tr>';

                    }
                    ?>


                   </table>
                   <a class="btn btn-primary" target="_blank" href="print_electionwinners.php">Print</a>
                 </div><!--/.services-->
              </div><!--/.row-->  
          </div><!--/.container-->
      </section><!--/#feature-->


  
