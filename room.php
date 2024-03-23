<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/room.css">
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

        </aside>
        <div class="content">
            <article class="chat">
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