<?php

    include "../config/koneksi.php";

    $id_user = $_POST['id_user'];
    $sql= "select * from adress where id_user = '.$id_user.'";
    $result = mysqli_query($con, $sql);

    if($result){
        while($row = mysqli_fetch_array($result)){
            $flag[]=$row;
        }
        //print(json_encode($flag));
        echo json_encode(array("server_response"=>$flag));
    }
    mysqli_close($con);
?>