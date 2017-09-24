<?php include("header.php");
      include('sidebar.php');
extract($_REQUEST);?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

     <h1>
        Team Leaders 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Team Leaders </li>
      </ol>
       
        <div class="content">
	   <div class="container-fluid">
           <?php if(isset($asuccess)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Added Team Leaders successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($deasucc)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Deactivated Successfully.</strong>
</div>
   <?php } ?>
            <?php if(isset($updsucc)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Updated successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($upderr)){ ?>
   <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Updated Unsuccessfully.</strong>
</div>
   <?php } ?>
           <?php if(isset($success)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Added successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($error)){ ?>
   <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Deleted Unsuccessfully.</strong>
</div>
   <?php } ?>
   <a href="add_Tmangers.php" class="btn btn-primary pull-right">Add Trainee Manger</a>
   <br/><br/>
         <div class="panel panel-info">
	          <div class="panel-heading"> Team Leaders  </div>
		         <div class="panel-body">
              <div class="box-body">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th> S No </th>
                                    <th> Teamleaders User Name </th>
                                    <th> Teamleaders Email </th>
                                 </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $i=1;
                                  $sql = "SELECT * FROM `multiusers_team_leaders` ORDER BY teamleaders_username ASC";
                                  $result = $con->query($sql);
                                  while($row = $result->fetch_assoc())
                                  { 
                                  ?>
                                  <tr>
                                   <td><?=$i;?></td>
                                  <td><?=$row['teamleaders_username'];?></td>
                                    <td><?=$row['teamleaders_email'];?></td>
                               </tr>
                               <?php $i++; } ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th> S No </th>
                                    <th> Teamleaders User Name </th>
                                    <th> Teamleaders Email </th>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                        <!-- /.box-body -->
                     </div>
                     <!-- /.box -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
      


<?php include('footer.php');?>