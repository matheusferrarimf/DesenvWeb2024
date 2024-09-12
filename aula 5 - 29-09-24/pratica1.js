function calcular() {
    const valor1 = parseFloat(document.getElementById('valor1').value);
    const operacao = document.getElementById('operacao').value;
    const valor2 = parseFloat(document.getElementById('valor2').value);
    let resultado;

    if (isNaN(valor1) || isNaN(valor2)) {
        alert('Por favor, insira números válidos!');
        return;
    }

    switch (operacao) {
        case 'somar':
            resultado = valor1 + valor2;
            break;
        case 'subtrair':
            resultado = valor1 - valor2;
            break;
        case 'multiplicar':
            resultado = valor1 * valor2;
            break;
        case 'dividir':
            resultado = valor1 / valor2;
            break;
        default:
            alert('Operação inválida!');
            return;
    }

    const campoResultado = document.getElementById('resultado');
    campoResultado.value = resultado;

    if (resultado > 0) {
        campoResultado.className = 'resultado verde';
    } else if (resultado < 0) {
        campoResultado.className = 'resultado vermelho';
    } else {
        campoResultado.className = 'resultado cinza';
    }
}
