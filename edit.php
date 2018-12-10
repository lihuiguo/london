<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $has_visited=$_POST['has_visited'];
    $food=$_POST['food'];
    $attractions=$_POST['attractions'];
    $email=$_POST['email'];

    // checking empty fields
    if(empty($first_name) || empty($last_name) || empty($has_visited) || empty($food) || empty($attractions) || empty($email)) {
        if(empty($first_name)) {
            echo "<font color='red'>First Name field is empty.</font><br/>";
        }

        if(empty($last_name)) {
            echo "<font color='red'>Last Name field is empty.</font><br/>";
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
    } else {
        //updating the table
        $result = mysqli_query($link, "UPDATE results SET first_name='$first_name',last_name='$last_name',has_visited='$has_visited',food='$food',attractions='$attractions',email='$email' WHERE id=$id");

        //redirectig to the display page. In our case, it is index.php
        header("Location: admin-data.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($link, "SELECT * FROM results WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $first_name = $res['first_name'];
    $last_name = $res['last_name'];
    $has_visited = $res['has_visited'];
    $food = $res['food'];
    $attractions = $res['attractions'];
    $email = $res['email'];
}
?>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="css/override.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Montserrat" rel="stylesheet">
</head>

<body>
  <main>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>First Name</td>
                <td><input type="text" name="first_name" value="<?php echo $first_name;?>"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="last_name" value="<?php echo $last_name;?>"></td>
            </tr>
             <tr>
                <td>Interest</td>
                <td><input type="text" name="has_visited" value="<?php echo $has_visited;?>"></td>
            </tr>
             <tr>
                <td>Food</td>
                <td><input type="text" name="food" value="<?php echo $food;?>"></td>
            </tr>
             <tr>
                <td>Attractions</td>
                <td><input type="text" name="attractions" value="<?php echo $attractions;?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    <main>
</body>
</html>
