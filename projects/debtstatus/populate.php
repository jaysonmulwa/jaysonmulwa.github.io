
<?php 

			$conn_string = "host=51.140.33.76 port=6773 dbname=testdb user=dev001 password=EV5gy2pQPDhC4H&fg3$5qzWL*9P4=D2K8ta9x&Qr2";
			$conn = pg_connect($conn_string);
         if($conn) {
      
  
 
 
 $set="INSERT INTO admin (id,name,pass) VALUES (2, 'mulwa', '254')";
 
pg_query($set);

 
 
 
 
 
 

	 $sql = "SELECT * FROM admin";
    
    $result = pg_query($sql);
	
	while($row = pg_fetch_assoc($result))
{
  
  
	echo $row['id'];
	 echo $row['name'];
	 echo $row['pass'];
	 
}
    } else {
        echo 'there has been an error connecting';
    } 
        pg_close(); 
?> 