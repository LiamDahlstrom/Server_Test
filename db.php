<?php 

$q = ($_GET['q']);
$sign = "%";

$servername = "localhost:8112";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};

mysqli_select_db($conn, 'movies');

$sql = "SELECT `id`, `name`, `link`, `date`, `description` FROM `movies` WHERE `name` LIKE '".$q.$sign."'";

$result = mysqli_query($conn, $sql);

while($r = mysqli_fetch_array($result)) {

echo $r['name']." ".$r['date']. "<br>";

};

mysqli_close($conn);

?>
