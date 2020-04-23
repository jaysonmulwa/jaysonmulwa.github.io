<?php





$conn_string = "host=51.140.33.76 port=6773 dbname=testdb user=dev001 password=EV5gy2pQPDhC4H&fg3$5qzWL*9P4=D2K8ta9x&Qr2";
			$conn = pg_connect($conn_string);
         if($conn) {
      
// $name = "mulwa";
//$password = "254";


$name=$_REQUEST['name'];
$password=$_REQUEST['password'];


$sql="SELECT * FROM admin WHERE name ='$name' AND pass='$password'";

	
		
$query=pg_query($sql);

if(pg_num_rows($query)==1)
{


session_start();

$_SESSION["name"] = $name;
$_SESSION["logged"] = true;


print_r($_SESSION);


}else 
{
	
$_SESSION["logged"] = false;	
echo "You are not registered";
}


}
 else {
        echo 'there has been an error connecting';
    } 
        pg_close(); 

?>