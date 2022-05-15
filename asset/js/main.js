function NotficationHelpService () {
    Notification.requestPermission().then(function(result) {
        console.log(result);
      });
      var notification = new Notification('Destek Talebiniz Oluşturuldu.', { 
        body: 'Merhaba, Destek talebiniz bize ulaştı. En kısa sürede size E-Posta adresiniz üzerinden geri dönüş sağlayacağız.',
        icon: 'http://localhost/LastDT/asset/img/Logo3.jpeg', 
    });
    notification.onclose = function(){
        console.log(false)
    }
     
    notification.onshow = function(){
        console.log("showed")
    }
     
    notification.onclick = function(){
        console.log(true)
    }
}
function NotficationSignUp () {
    Notification.requestPermission().then(function(result) {
        console.log(result);
      });
      var notification = new Notification('Üyelik Talebiniz Alındı', { 
        body: 'Merhaba, üyelik talebiniz bize ulaştı. En kısa sürede size E-Posta adresiniz üzerinden geri dönüş sağlayacağız.',
        icon: 'http://localhost/LastDT/asset/img/Logo3.jpeg', 
    });
    notification.onclose = function(){
        console.log(false)
    }
     
    notification.onshow = function(){
        console.log("showed")
    }
     
    notification.onclick = function(){
        console.log(true)
    }
}
// NotficationHelpService();
function DeletedAcc() {
    Notification.requestPermission().then(function(result) {
        console.log(result);
      });
      var notification = new Notification('Hesabınız Askıda', { 
        body: 'Merhaba, hesabınız talebiniz üzerine askıya alındı.Yine Bekleriz.',
        icon: 'http://localhost/LastDT/asset/img/Logo3.jpeg', 
    });
    notification.onclose = function(){
        console.log(false)
    }
     
    notification.onshow = function(){
        console.log("showed")
    }
     
    notification.onclick = function(){
        console.log(true)
    }
}
 