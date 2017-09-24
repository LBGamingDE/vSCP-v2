<?php include('header.php');
   include('sidebar.php');
   extract($_REQUEST);?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add General Manager 
      </h1>
      <ol class="breadcrumb">
         <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">General Manager </li>
      </ol>
      <div class="content">
         <div class="container-fluid">
            <?php
               if(isset($success)){?>
            <div class="alert alert-success" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <strong>General Manager  is added sucessfully</strong> 
            </div>
            <?php }
               ?>
            <?php
               if(isset($error)){?>
            <div class="alert alert-warning" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <strong>General Manager  is not added at this time try again!</strong> 
            </div>
            <?php }
               ?>
               <a href="General_Managers_List.php" class="btn btn-primary pull-right">List Of General Managers</a>
         <br/><br/>
            <div class="panel panel-info">
               <div class="panel-heading">Add General Manager  </div>
               <div class="panel-body">
                  <form class="form-horizontal" role="form" method="post" action="saveGeneral_Manager.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="name" class="control-label">Email </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="email" class="form-control" name="seamil" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="name" class="control-label">User Name </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="text" class="form-control" name="suname" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="name" class="control-label">Password </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="password" class="form-control" name="spass" required>
                        </div>
                     </div>
                     <br>
                     <div class="col-md-10 col-sm-10 col-sx-12">
                        <input id="submit" name="submit" type="submit" value="Add General Manager " class="btn btn-success pull-right">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<?php include("footer.php");?>