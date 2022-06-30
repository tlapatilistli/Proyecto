
  
  function validarFormulario(evento) {
    evento.preventDefault();
    var selectMes = document.getElementById('selectMes').value;
    var selectYear = document.getElementById('selectYear').value;
    const yearActual = new Date().getFullYear();
    const mes = new Date().getMonth() + 1;
    if(selectMes <= mes && selectYear==yearActual) {
      alert('La tarjeta se ha vencido');
      return;
    }
    
    this.submit();
  }