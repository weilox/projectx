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
<script>
function chatInit() {
  const chatDiv = document.querySelector('.chat');
  // Önceki mesajları temizle
  chatDiv.innerHTML = '';
  
  // Daha önce yüklenip yüklenmediğini kontrol et
  if (!chatInit.initialized) {
    // messages.txt dosyasından veriyi al ve messagesDiv içine ekle
    fetch('messsages.txt')
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.text();
      })
      .then(data => {
        // messages.txt dosyasından alınan veriyi parçalara ayır
        const messagesArray = data.split('\n');

        // Her bir metin parçası için yeni bir messages divi oluştur ve içine ekle
        messagesArray.forEach(message => {
          const messageDiv = document.createElement('div');
          messageDiv.classList.add('message');
          messageDiv.textContent = message;
          chatDiv.appendChild(messageDiv);
        });
      })
      .catch(error => {
        console.error('There has been a problem with your fetch operation:', error);
      });

    // Chat fonksiyonunun daha önce başlatıldığını işaretle
    
  }
}

// Belirli bir süre sonra tekrar çağır
setInterval(chatInit, 1000);

</script>

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
<<<<<<< HEAD
            <article class="chat" id="chat">
                <div class="message">
                    <p>Örnek mesajdır.</p>
                </div>
=======
            <article class="chat">
>>>>>>> 7e794c76ff652d8560d2be834a846a2adc0a0818
            </article>
            <article class="send">
                <input type="text" name="text" autocomplete="off" placeholder="Enter a message" autofocus>
            </article>
        </div>
    </main>
</form>
</body>
</html>

<?php

if($_POST["text"]){
    $text = $_POST["text"];
    
    file_put_contents("messsages.txt",$text .PHP_EOL, FILE_APPEND);
}


?>