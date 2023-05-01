<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $login = $_POST ["login"];
    $pass = $_POST ["password"];
    echo "<p>Login: $login</p>";
    echo "<p>Password: $pass</p>";
    $loginInfo = file_get_contents('user.txt');
    $userInfo = explode(",", $loginInfo);
    $foydalanuvchi = false;
    foreach($userInfo as $value){
        $value = explode(' ', $value);
        if(trim($value[0]) === $login && $value[1] === $pass){
            $foydalanuvchi = true;
        }
    }
    if($foydalanuvchi){
        echo "Xush kelibsiz";
    }else{
        echo "noto'g'ri";
    }
    ?>
    
</body>
</html>