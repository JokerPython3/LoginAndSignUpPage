<?php
# code wrote : @jokerpython3

if($_SERVER["REQUEST_METHOD"] === "GET"){
    $username=$_GET["user-login"];
    $password=$_GET["password-login"];
    
    if(file_exists("data.json")){
        $json = file_get_contents("data.json");
        $users = json_decode($json,true);
        if(!is_array($users)){
            $users = [];
        }
    }else{
        $users = [];
    }
    $use = false;
    foreach($users as $user){
        if(isset($user["username"]) && $user["username"] === $username){
            $use = true;
            break;
        }
    }
    if($use){
        header("Location: ../Froent-End/index.php?error=username");
        exit;
    }else{
        $users[] = [
            "username" => $username,
            "password" => $password,
        ];
        $new = json_encode($users,JSON_PRETTY_PRINT);
        file_put_contents("data.json",$new);
        header("Location: ../Froent-End/index.php?success=1");
        exit;
    }

}else{
    http_response_code(404);
    exit();
}
#ksj 