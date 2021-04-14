<?php 

	include('db/config.php');

	$sql = "SELECT id,name,skill,host_business,img FROM jtps";

	$results = mysqli_query($conn, $sql);

	$jtps = [];
	while($jtp = $results->fetch_assoc()){
		$jtps[] = $jtp;
	}
	

	include('header.php'); 

?>

  <header>
    
  </header>

  <!-- Page Content -->
  <div class="container">
 
    <h1 class="my-4 text-center">Junior Tech Professionals (JTPs)</h1>

    <div class="row row-cols-1 row-cols-md-4 g-4">   	    	
    

	    <?php foreach ($jtps as $jtp) : ?>
	    	<div class="col">
	    		<div class="card">
	    			<?php 	    				
	    				$img = 'https://res.cloudinary.com/dlbuuppr8/image/upload/ar_1:1,bo_3px_solid_rgb:ffffff,c_fill,g_auto,h_200,r_max,w_200/v1617982089/jtps/' . $jtp['img'];
	    			?>
	    			<img src="<?php echo $img; ?>" alt="">
	    			<div class="card-body text-center">
	            		<h5 class="card-title"><?php echo $jtp['name']; ?></h5>
	            		<p class="card_text jtp-text" id="jtp-skill"><?php echo $jtp['skill']; ?></p>
	            		<p class="card_text jtp-text"><?php echo $jtp['host_business']; ?></p>
	          		</div>    			
	    		</div>
	       	</div>
	    <?php endforeach; ?>


    </div>


  </div>
  <!-- /.container -->

<?php include('footer.php'); ?>