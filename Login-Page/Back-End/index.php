<?php

if($_SERVER["REQUEST_METHOD"] === "GET"){
    $username=$_GET["user-login"];
    $password=$_GET["password-login"];
    $path = "../SignIn/Back-End/data.json";
    if(file_exists($path)){
        $users = file_get_contents($path);
        $data = json_decode($users,true);
        $ksj = false;
        foreach($data as $date){
            if (isset($date["username"]) && $date["username"] === $username && $date["password"] === $password ){
                $ksj = true;
                break;
            }
        }
        if ($ksj){
            header("Location: ../Froent-End/index.php?success=1");
            exit;
        }else{
            header("Location: ../Froent-End/index.php?error=login");
            exit;       
        }

    }else{
        echo '';
        exit;
    }
    exit;
}else{
    http_response_code(404);
    exit;
}
#ksj