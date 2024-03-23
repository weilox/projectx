<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/m.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Room x</title>
    <script>
        window.onload = function() {
            var inp = document.getElementById("send");
            inp.focus();
        };
    </script>
</head>
<body>
    <form action="m.php" method="POST">
            <article class="send">
                <input type="text" name="text" autocomplete="off" placeholder="Enter a message" id="send">
            </article>

    </form>
</body>
</html>

<?php
if($_POST["text"]){
    $text = $_POST["text"];
    file_put_contents("messsages.txt",$text .PHP_EOL, FILE_APPEND);
}
?>