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
     			<input type="text" class="form-control" placeholder="Search by animal it affects..." id="searchInput1">
     			<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
     		</form>
 		</div>
 	</div>


 	<!--content cards-->
 	<div class="row" id="Parasite">
       <div class="col-md-12">
         <div class="thumbnails">
             <?php
             $sql="SELECT * FROM tbl_parasites";
             $query=mysqli_query($conn,$sql);
             while($row=mysqli_fetch_assoc($query)) {
             ?>
                 <div class="col-sm-3">

                     <div class="thumbnail">
                         <img src="images/product11.jpg" alt="parasite image">

                         <div class="caption">
                             <h3><?php echo $row['pname']?></h3>

                             <p><?php echo $row['description']?></p>

                             <p><a href="contact.html" class="btn btn-primary btn-small" target="_blank">More info</a>
                             </p>
                         </div>
                     </div>
                 </div>

                 <?php
             }
             ?>
          </div>
       </div>
    </div>

</body>
</html>