<?php
    require_once("database.php");
    function login($email, $password){
        global $conn;
        get_connection();
        $stmt=$conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result=$stmt->get_result();
        $user=$result->fetch_all(MYSQLI_ASSOC);
        return $user ? true : false;
    }


    function getAllDistrict(){
        global $conn;
        get_connection();
        $result=$conn->query("SELECT * FROM districts");
        $district=$result->fetch_all(MYSQLI_ASSOC);
        return $district;
    }

    function get_district($id){
        global $conn;
        get_connection();
        $stmt=$conn->prepare("SELECT * FROM districts WHERE id=? ");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result=$stmt->get_result();
        $district=$result->fetch_all(MYSQLI_ASSOC);
        return $district ? $district[0] : [];
    }

    function add_district($district_name, $provices_id){
        global $conn;
        get_connection();
        $stmt=$conn->prepare("INSERT INTO districts(name, provices_id) VALUES (?,?)");
        $stmt->bind_param("si", $district_name, $provices_id);
        $add=$stmt->execute();
        return $add;
    }

    function edit_district($district_name,$provices_id, $id){
        global $conn;
        get_connection();
        $stmt=$conn->prepare("UPDATE districts SET name=?, provices_id=? WHERE id=?");
        $stmt->bind_param("sii", $district_name ,$provices_id, $id);
        $edit=$stmt->execute();
        return $edit;
    }

    function delete_district($id){
        global $conn;
        get_connection($id);
        $stmt=$conn->prepare("DELETE FROM districts WHERE id=?");
        $stmt->bind_param("i", $id);
        $delete=$stmt->execute();
        return $delete;
    }

    function check_login(){
        session_start();
        $logged=$_SESSION['logged'] ?? false;

        if(!$logged){
            header("location: login.php");
            exit();
        }
    }
?>