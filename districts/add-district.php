<?php
    require_once("database.php");
    require_once("function.php");
    check_login();
    
    get_connection();
    $rows=getAllDistrict();
    $err="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $district_name = $_POST["dname"] ?? '';
        $provices_id= intval($_POST["sl_provices"]);
        if(isset($district_name) && isset($provices_id)){
            add_district($district_name, $provices_id);   
            header("location: district.php") ;
        }
        else{
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
    <div><h2>Add District</h2></div>
    <div>District Name:</div>
    <div><input type="text" name="dname"></div>
    <div>Provices_id:</div>
    <div>
    <div>
        <select name="sl_provices" id="sl_provices">
            <option value="1">Ha Noi</option>
            <option value="2">Thanh Pho Ho Chi Minh</option>
        </select>
    </div>
    </div>
    <div><input type="submit" value="confirm"></div>
    <div><a href="district.php">Back</a></div>
    <span><?php echo $err; ?></span>
    </form>
</body>
</html>