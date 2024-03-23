function chatInit() {
  const chatDiv = document.querySelector('.chat');
  chatDiv.textContent = "";
  
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
          const p = document.createElement('p');
          messageDiv.classList.add('message');
          messageDiv.appendChild(p);

          p.textContent = message;
          chatDiv.appendChild(messageDiv);

          const chat = document.getElementById('chat');
          chat.scrollTop = chat.scrollHeight;

          window.onload = function() {
            chat.scrollTop = chat.scrollHeight;
          };
        });
      })
      .catch(error => {
        console.error('There has been a problem with your fetch operation:', error);
      });

    // Chat fonksiyonunun daha önce başlatıldığını işaretle
  }
}

// Belirli bir süre sonra tekrar çağır
setInterval(chatInit, 500);
