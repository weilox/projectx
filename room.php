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
    <main>
        <aside class="users">
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
            <article class="chat" id="chat">
                <div class="message">
                    <p>Örnek mesajdır.</p>
                </div>
            </article>
            <article class="send">
                <input type="text" autocomplete="off" placeholder="Enter a message" autofocus>
            </article>
        </div>
    </main>

    <script src="/scripts/room.js"></script>
</body>
</html>