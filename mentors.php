<?php 

	include('db/config.php');

	$sql = "SELECT id,name,company,img FROM mentors";

	$results = mysqli_query($conn, $sql);

	$mentors = [];
	while($mentor = $results->fetch_assoc()){
		$mentors[] = $mentor;
	}
	

	include('header.php'); 

?>

  <header>
    
  </header>

  <!-- Page Content -->
  <div class="container">
 
    <h1 class="my-4 text-center">Tech Buddies</h1>

    <div class="row row-cols-1 row-cols-md-4 g-4">   	    	
    
	    <?php foreach ($mentors as $mentor) : ?>
	    	<div class="col">
	    		<div class="card">
	    			<?php 
	    				$img = 'https://res.cloudinary.com/dlbuuppr8/image/upload/ar_1:1,bo_3px_solid_rgb:ffffff,c_fill,g_auto,h_200,r_max,w_200/v1618039789/mentors/' . $mentor['img']; 
	    			?>
	    			<img src="<?php echo $img; ?>" alt="">
	    			<div class="card-body text-center">
	            		<h5 class="card-title"><?php echo $mentor['name']; ?></h5>
	            		<p class="card-text"><?php echo $mentor['company']; ?></p>
	          		</div>    			
	    		</div>
	       	</div>
	    <?php endforeach; ?>

    </div>


  </div>
  <!-- /.container -->

<?php include('footer.php'); ?>