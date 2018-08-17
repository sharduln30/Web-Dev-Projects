<?php

    session_start();

    if (array_key_exists("id", $_COOKIE) && $_COOKIE ['id']) {
        
        $_SESSION['id'] = $_COOKIE['id'];
        
    }

    if (array_key_exists("id", $_SESSION)) {
              
      include("connection.php");
      
      $query = "SELECT diary FROM `users` WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";
      $row = mysqli_fetch_array(mysqli_query($link, $query));
 
      $diaryContent = $row['diary'];
	  
	  
	
	  
	  	
      
    } else {
        
        header("Location: index.php");
        
    }
	


	include("header.php");
	
	
	
	

?>


<div>
<nav class="navbar navbar-light bg-faded navbar-fixed-top">
  


  <a class="navbar-brand" href="#">Admin Login Page</a>

    <div class="pull-xs-right">
      <a href ='index.php?logout=1'>
        <button class="btn btn-success-outline btn-lg" type="submit">Logout</button></a>
    </div>


	
	</nav>
</div>


    <div id="containerLoggedInPage">
	
      <div id="button1"><a class="btn btn-primary btn-lg" href="records.php" role="button">Add</a>
	  <a class="btn btn-primary btn-lg" href="view_update.php" role="button">Update</a><br></div>
	  <div id="button2">
      <a class="btn btn-primary btn-lg" href="view_delete.php" role="button">Remove</a>
      <a class="btn btn-primary btn-lg" href="search.php" role="button">Search</a></div>
        
    </div>




<html>
 <body>
<?php
// connect to the database
include('connect-db.php');

// get the records from the database
if ($result = $mysqli->query("SELECT * FROM players ORDER BY id"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<div>";
echo "<table border='2' cellpadding='10'>";

// set table headers
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->id . "</td>";
echo "<td>" . $row->firstname . "</td>";
echo "<td>" . $row->lastname . "</td>";

echo "</tr>";
}

echo "</table>";
echo "</div>";

}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>


</body>
</html>

<?php
    
    include("footer.php");
?>


