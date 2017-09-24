<?php include("../header.php");
      include("tmsidebar.php");
      $id=$_SESSION['s_usersid'];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
        <!-- Main content -->
    <section class="content">
         <!-- Small boxes (Stat box) -->
         <div class="row">
            
            
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-green">
                  <div class="inner">
                  <?php $tot_leav    = "SELECT  * from  strategic_trainer_leave where leave_tmanager_id=$id and leave_status='Approved'";
                       $leave_res    = $con->query($tot_leav);
                       $leave_count        = $leave_res->num_rows;
                      ?>
                     <h3><?=$leave_count;?></h3>
                     <p>Total Leaves </p>
                  </div>
                  <div class="icon">
                     <i class="ion-bowtie"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-yellow">
                  <div class="inner">
                     <h3>0</h3>
                     <p> Current Month Sales </p>
                  </div>
                  <div class="icon">
                     <i class="ion-person-stalker"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
           
         </div>
         <!-- /.row -->
         <!-- Main row -->
      </section>
    </section>
    </div>
	   
 
<?php include("../footer.php");?>