<?php
    require_once("database.php");
    require_once("function.php");

    get_connection();
    check_login();

    $err="";
    $rows=$id?get_district($id):[];
    $district_name = $_POST["dname"] ?? '';
    $provinces_id=$_POST["sl_provices"] ?? $rows['provices_id'];
    $id=intval($_GET['id']);

    if($_SERVER["REQUEST_METHOD"]=="POST"){
    
        if(isset($district_name)){
            edit_district($district_name, $provinces_id, $id);    
            header("location: district.php");
        }
        else if(empty($district_name)){
            $err="district name or provices id is empty !";
        }
         
    } 
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<style>
    div{padding: 5px}
    span{color: red}
</style>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <div><h2>Edit District</h2></div>
    
    <div>District Name:</div>
    <div><input type="text" name="dname" value="<?php echo $rows['name']; ?>"></div>
    <div>Provices_id: <?php echo $rows["provices_id"]; ?></div>
    <div>
    <select name="sl_provices" id="sl_provices">
            <option value="1">1-Ha Noi</option>
            <option value="2">2-Thanh Pho Ho Chi Minh</option>
    </select>
    </div>
    <div><input type="submit" value="confirm"></div>
    <div><a href="district.php">Back</a></div>
    <span><?php echo $err; ?></span>
    </form>
</body>
</html>