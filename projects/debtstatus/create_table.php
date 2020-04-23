<?php 

			$conn_string = "host=51.140.33.76 port=6773 dbname=testdb user=dev001 password=EV5gy2pQPDhC4H&fg3$5qzWL*9P4=D2K8ta9x&Qr2";
			$conn = pg_connect($conn_string);
         if($conn) {
      
 $query="DROP TABLE if exists admin";
 pg_query($query);
 
 
 $query2="CREATE TABLE admin(
   id         INT PRIMARY KEY      NOT NULL,
   name           CHAR(50) NOT NULL,
   pass           CHAR(50)      NOT NULL
)";
pg_query($query2);

	


}
 else {
        echo 'there has been an error connecting';
    } 
        pg_close(); 
?> 