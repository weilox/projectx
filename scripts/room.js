var chatDiv = document.querySelector('article.chat#chat'), mesajlar = 0,
whenLoad = async (nextProcess = function() {}, ...argList) => {
  log = false;
  if(log) {
    console.log('WhenLoad fonksiyonu...');
    console.log('Baştaki "log" değişkenini false yaparak bu yazıları kapatabilirsiniz');
    console.log('');
  }
  return new Promise(async (resolve) => {
    while(true) {
      if(document.readyState === 'complete') {
        resolve(true);
        if(log) console.log('load completed');
        if(log) console.log('');
        nextProcess(...argList);
        break;
      } else {
        await new Promise(res => setTimeout(res, 50))
        if(log) console.log('still waiting for load...');
      }
    }
  })
};


function mesajlariAl() {
  return new Promise(async (resolve) => { resolve(await fetch('messsages.txt').then(res => res.text())); });
}

async function omerChat() {
  let tumMesajlar = (await mesajlariAl()).split('\n');
  let ekle = tumMesajlar.length - mesajlar;
  for (let i = tumMesajlar.length - ekle; i < tumMesajlar.length; i++) {
    let mesaj = tumMesajlar[mesajlar == 0 ? i : i - 1];
    chatDiv.innerHTML += `<div class="message"><p>${mesaj.replace('`', '*')}<p></div>`;
    console.log('tm knk', tumMesajlar.length, ' - ', ekle, ' - ', tumMesajlar.length - ekle, ' - ', tumMesajlar[tumMesajlar.length - ekle]);
    mesajlar++;
    chatDiv.scrollTop = chatDiv.scrollHeight;
  }
}

function baslangic() {
  chatDiv.innerHTML = '';
  setInterval(omerChat, 1000);
}

whenLoad(baslangic);