document.getElementById('signin').addEventListener('click', function () {
    document.getElementById('meuPopup').style.display = 'block';
    function fecharPopup() {
      document.getElementById('meuPopup').style.display = 'none';
    }
    document.getElementById('fecharPopup').addEventListener('click', fecharPopup);
  
    document.getElementById('sair').addEventListener('click', function () {
      window.location.href = 'index.php'; 
    });
  
  });