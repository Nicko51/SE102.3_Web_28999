function changeBackgroundColor(color) {
    document.body.style.backgroundColor = color;
  }
  
  function resetBackgroundColor(color) {

    const currentColor = document.body.style.backgroundColor;
    if (currentColor === color) {
      document.body.style.backgroundColor = '';
    }
  }
  