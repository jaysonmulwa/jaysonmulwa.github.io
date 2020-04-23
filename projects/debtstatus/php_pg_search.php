<?php 

			$conn_string = "host=51.140.33.76 port=6773 dbname=testdb user=dev001 password=EV5gy2pQPDhC4H&fg3$5qzWL*9P4=D2K8ta9x&Qr2";
			$conn = pg_connect($conn_string);
         if($conn) {
      
  
 
$search = $_REQUEST['search'];


	 $sql = "SELECT * FROM tbl_profiles  WHERE national_id = '$search' OR mobile_number= $search";
    
    $result = pg_query($sql);
	

		
if(pg_num_rows($result)>=1)
{
	
	
	
	while($row = pg_fetch_assoc($result))
{
  
  
  
  	echo '<div class="row">';
	echo '<div class="col-lg-12">';
	echo '<div class="panel panel-default">';
				
	echo '<div class="panel-body">';
		echo '<div class="row"> ';
		echo '<div class="col-lg-4">National ID:</div>';
		echo '<div class="col-lg-4">';
		echo $row['national_id'];
		echo '</div>';
		echo '</div>';
		
		echo '<div class="row"> ';
		echo '<div class="col-lg-4">Mobile Number:</div>';
		echo '<div class="col-lg-4">';
		echo $row['mobile_number'];
		echo '</div>';
		echo '</div>';
		
		echo '<div class="row"> ';
		echo '<div class="col-lg-4">Fully Cleared:</div>';
		echo '<div class="col-lg-4">';
		echo $row['fully_cleared'];
		echo '</div>';
		echo '</div>';
		
		echo '<div class="row"> ';
		echo '<div class="col-lg-4">Mobile Number:</div>';
		echo '<div class="col-lg-4">';
		echo $row['date_cleared'];
		echo '</div>';
		echo '</div>';
		
		echo '<div class="row"> ';
		echo '<div class="col-lg-4">Batch Numbers:</div>';
		echo '<div class="col-lg-4">';
		echo $row['batch_numbers'];
		echo '</div>';
		echo '</div>';
		
		echo '<div class="row"> ';
		echo '<div class="col-lg-4">Clearing Mpesa transaction ID:</div>';
		echo '<div class="col-lg-4">';
		echo $row['clearing_mpesa_trans_id'];
		echo '</div>';
		echo '</div>';
		
		
                       
                       
                       
                                    
	echo '</div>';
    echo '</div>';
	echo '</div>';
	echo '</div>';
	
  
  
     
     echo '</tr>';
}
	
	
}else{
	echo '<div class="row">';
	echo '<div class="col-lg-12">';
	echo '<div class="panel panel-default">';
				
	echo '<div class="panel-body">
						
      The Customer you have searched for does not exist.
                                          
  </div>';
   echo ' </div>';
	echo '</div>';
	echo '</div>';
	
}

	
    } else {
        echo 'there has been an error connecting';
    } 
        pg_close(); 
?> 