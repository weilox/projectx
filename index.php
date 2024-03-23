<?php
if(isset($_POST["creat"])){
    if($_POST["pass"]){
        $token = bin2hex(random_bytes(16));
        mkdir($token,0777);
        print("<input class='link' type='text' value='".$token."'>");
        $json=array(
            "pass" => $_POST["pass"]
        );
        $json=json_encode($json);
        file_put_contents("".$token."/settings.json", $json, FILE_APPEND);
    }
    else{
        print("<p class='error'>şifre gir</p>");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Create Room</title>
</head>
<body>
    <form action="index.php" method="POST">
    <main>
        <article>
            <div class="neon">
                Hello,
            </div>
            <div class="buttonbox">
                <input name="pass" type="text" placeholder="Enter password" class="password" autocomplete="off">
                <button name="creat" class="btn">Create Room</button>
            </div>
            
        </article>
    </main>
</form>
</body>
</html>

