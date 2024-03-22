<?php
if(isset($_POST["creat"])){
    if(isset($_POST["pass"])){
        $token = bin2hex(random_bytes(16));
        mkdir($token,0777);
        print("<input type='text' value='".$token."'>");
    }
    else{
        print("şifre gir");
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
            <input type="text" name="pass">
            <div class="buttonbox">
                <button name="creat" class="btn">Create Room</button>
            </div>
            
        </article>
    </main>
</form>
</body>
</html>

