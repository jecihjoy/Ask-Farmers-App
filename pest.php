<?php include_once("includes/db_connect.php");
include_once("includes/header.php");
?>

 	<!--search bars-->
 	<div class="row">
 		<div class="col-md-6">
 			<form class="navbar-form hidden-xs">
     			<input type="text" class="form-control" placeholder="Search by name..." id="searchInput1">
     			<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
     		</form>
 		</div>

 		<div class="col-md-6">
 			<form class="navbar-form hidden-xs">
     			<input type="text" class="form-control" placeholder="Search by crop it affects..." id="searchInput1">
     			<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
     		</form>
 		</div>
 	</div>


 	<!--content cards-->
 	<div class="row" id="Pest">
       <div class="col-12">
           <?php
           $sql="SELECT * FROM `tbl_pests`";
           $query=mysqli_query($conn,$sql);
           while($row=mysqli_fetch_assoc($query)) {
               ?>
               <div class="thumbnails ">
                   <div class="col-sm-3">
                       <div class="thumbnail">
                           <img src="images/product11.jpg" alt="pest image">

                           <div class="caption">
                               <h3><?php echo $row['pest_name']?></h3>

                               <p><?php echo $row['description']?></p>

                               <p><a href="contact.html" class="btn btn-primary btn-small" target="_blank">More info</a>
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
               <?php
           }
           ?>
       </div>
    </div>

</body>
</html>