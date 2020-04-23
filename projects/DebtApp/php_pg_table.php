<?php 

			$conn_string = "host=51.140.33.76 port=6773 dbname=testdb user=dev001 password=EV5gy2pQPDhC4H&fg3$5qzWL*9P4=D2K8ta9x&Qr2";
			$conn = pg_connect($conn_string);
         if($conn) {
      
  
 

	 $sql = "SELECT * FROM tbl_due_listing";
    
    $result = pg_query($sql);
	echo $result;
	while($row = pg_fetch_assoc($result))
{
  
  
  
     echo '<tr>';
	
		 
	 
  
	echo '<td>';
	 echo $row['cust_name'];
	 echo '</td>';	
	 
	echo '<td>';
	 echo $row['cust_id'];
	 echo '</td>';	

		echo '<td>';
	 echo $row['cust_acno'];
	 echo '</td>';
	 
	 echo '<td>';
	 echo $row['loan_amount'];
	 echo '</td>';
	
		 echo '<td>';
	 echo $row['loan_balance'];
	 echo '</td>';
		 
		  echo '<td>';
	 echo $row['loan_issue_date'];
	 echo '</td>';
	 
	  echo '<td>';
	 echo $row['loan_due_date'];
	 echo '</td>';
	 
	  echo '<td>';
	 echo $row['cust_mobile_number'];
	 echo '</td>';
		 
		 
		 
	
     echo '</tr>';
}
    } else {
        echo 'there has been an error connecting';
    } 
        pg_close(); 
?> 