<?php 

	include('db/config.php');

	$sql = "SELECT name,description,website,img FROM host_businesses";

	$results = mysqli_query($conn, $sql);

	$host_businesses = [];
	while($host_business = $results->fetch_assoc()){
		$host_businesses[] = $host_business;
	}

	include('header.php'); 

?>

  <header>
    
  </header>

  <!-- Page Content -->
  <div class="container">
 
    <h1 class="my-4 text-center">Host Businesses</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">   	    	
    
	    <?php foreach ($host_businesses as $host_business) : ?>
	    	<div class="col">
	    		<div class="card mb-3" style="">
				  	<div class="row g-0">
				    	<div class="col-md-4">
				    		<?php
				    			$img = 'https://res.cloudinary.com/dlbuuppr8/image/upload/v1618221077/host_businesses/' . $host_business['img'];
				    		?>
				      		<img src="<?php echo $img ?>" alt="..." style="height: 100%; width: 100%; object-fit: contain">
				    	</div>
				    	<div class="col-md-8">
				      		<div class="card-body">
				        		<h5 class="card-title"><?php echo $host_business['name'] ?></h5>
				        		<p class="card-text"><?php echo $host_business['description']?></p>
				      		</div>
				    	</div>
				  	</div>
				</div>
	    	</div>
	    <?php endforeach; ?>

    </div>
    
  </div>
  <!-- /.container -->

<?php include('footer.php'); ?>