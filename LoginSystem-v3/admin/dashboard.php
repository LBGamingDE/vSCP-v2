<?php include("header.php");
   include("sidebar.php");
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
               <div class="small-box bg-aqua">
                  <div class="inner">
                      <?php 
                        $tm    = "SELECT * FROM multiusers_team_members";
                        $tmresult = $con->query($tm);
                        $tmcount  = mysqli_num_rows($tmresult);
                        ?>
                     <h3><?php echo $tmcount;?></h3>
                     <p>Team Members List</p>
                  </div>
                  <div class="icon">
                     <i class="ion-ios-people"></i>
                  </div>
                  <a href="monthly_Reports.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-green">
                  <div class="inner">
                     <?php 
                        $gm    = "SELECT * FROM multiusers_general_manager";
                        $gmresult = $con->query($gm);
                        $gmcount  = mysqli_num_rows($gmresult);
                        ?>
                     <h3><?php echo $gmcount;?></h3>
                     <p>General Managers </p>
                  </div>
                  <div class="icon">
                     <i class="ion-bowtie"></i>
                  </div>
                  <a href="trainee_Mangers_List.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-yellow">
                  <div class="inner">
                     <?php 
                        $tr  = "SELECT * FROM multiusers_team_leaders";
                        $trresult = $con->query($tr);
                        $trcount  = mysqli_num_rows($trresult);
                        ?>
                     <h3><?php echo $trcount;?></h3>
                     <p> Team Leaders </p>
                  </div>
                  <div class="icon">
                     <i class="ion-person-stalker"></i>
                  </div>
                  <a href="trainers_List.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-red">
                  <div class="inner">
                     <?php 
                        $co    = "SELECT * FROM multiusers_supervisor";
                        $coresult = $con->query($co);
                        $cocount  = mysqli_num_rows($coresult);
                        ?>
                     <h3><?php echo $cocount;?></h3>
                     <p> Supervisor List </p>
                  </div>
                  <div class="icon">
                     <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="list_Courses.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <!-- ./col -->
         </div>
         <!-- /.row -->
         <!-- Main row -->
      </section>
</div>
<?php include("footer.php");?>