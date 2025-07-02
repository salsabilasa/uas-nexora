function openPopup() {
      document.getElementById('popup').style.display = 'flex';
    }


    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }


    function goToPayment(type) {
      window.location.href = 'payment.html?type=' + type;
    }
