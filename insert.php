<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $has_visited = $_POST['has_visited'];
    $food = $_POST['food'];
    $attractions = $_POST['attractions-'];
    $email = $_POST['email'];
        
    // checking empty fields
    if(empty($first_name) || empty($last_name) || empty($has_visited) || empty($food) || empty($attractions) || empty($email)) {                
        if(empty($first_name)) {
            echo "<font color='red'>First name field is empty.</font><br/>";
        }
        
        if(empty($last_name)) {
            echo "<font color='red'>Last name field is empty.</font><br/>";
        }
        
        if(empty($has_visited)) {
            echo "<font color='red'>Interest field is empty.</font><br/>";
        }

        if(empty($food)) {
            echo "<font color='red'>Food field is empty.</font><br/>";
        }

        if(empty($attractions)) {
            echo "<font color='red'>Attractions field is empty.</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($link, "INSERT INTO results(first_name, last_name, has_visited, food, attractions,email) VALUES('$first_name','last_name','has_visited','food','attractions','$email')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>