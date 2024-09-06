document.getElementById('btn-soma').addEventListener('click', function() {
    calcular('+');
  });
  
  document.getElementById('btn-subtracao').addEventListener('click', function() {
    calcular('-');
  });
  
  document.getElementById('btn-multiplicacao').addEventListener('click', function() {
    calcular('*');
  });
  
  document.getElementById('btn-divisao').addEventListener('click', function() {
    calcular('/');
  });
  
  function calcular(operacao) {
    const valor1 = parseFloat(document.getElementById('valor1').value);
    const valor2 = parseFloat(document.getElementById('valor2').value);
    let resultado;
  
    if (isNaN(valor1) || isNaN(valor2)) {
      alert("Por favor, insira números válidos.");
      return;
    }
  
    switch (operacao) {
      case '+':
        resultado = valor1 + valor2;
        break;
      case '-':
        resultado = valor1 - valor2;
        break;
      case '*':
        resultado = valor1 * valor2;
        break;
      case '/':
        if (valor2 === 0) {
          alert("Divisão por zero não é permitida.");
          return;
        }
        resultado = valor1 / valor2;
        break;
      default:
        return;
    }
  
    const resultadoDiv = document.getElementById('resultado');
    resultadoDiv.textContent = `Resultado: ${resultado}`;
  
    // Mudar cor do resultado
    if (resultado > 0) {
      resultadoDiv.style.backgroundColor = 'green';
      resultadoDiv.style.color = 'white';
    } else if (resultado < 0) {
      resultadoDiv.style.backgroundColor = 'red';
      resultadoDiv.style.color = 'white';
    } else {
      resultadoDiv.style.backgroundColor = 'gray';
      resultadoDiv.style.color = 'white';
    }
  }
  