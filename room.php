<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/room.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Room x</title>
</head>
<body>
    <form action="room.php" method="POST">
    <main>
        <aside class="users">
            <div class="delete">
                <a href="#">Delete Chat</a>
            </div>
            <div class="user">
                <i class="fa-solid fa-user"></i>
                <p>user1</p>
            </div>
            <div class="user">
                <i class="fa-solid fa-user"></i>
                <p>user2</p>
            </div>
            <div class="user">
                <i class="fa-solid fa-user"></i>
                <p>user3</p>
            </div>
        </aside>
        <div class="content">
            <article class="chat" id="chat"></article>
            <article class="send">
                <input type="text" name="text" autocomplete="off" placeholder="Enter a message" autofocus>
            </article>
        </div>
    </main>
    <script src="/scripts/room.js"></script>
</form>
</body>
</html>

<?php
if($_POST["text"]){
    $text = $_POST["text"];
    file_put_contents("messsages.txt",$text .PHP_EOL, FILE_APPEND);
}
?>