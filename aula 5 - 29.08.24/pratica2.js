function adicionarMediaNotas() {
    const tabela = document.getElementById("tabela-notas");
    const linhas = tabela.getElementsByTagName("tbody")[0].getElementsByTagName("tr");
    const totalLinhas = linhas.length;
  
    // Cria nova linha para as médias
    const novaLinha = tabela.insertRow();
    const celulaTitulo = novaLinha.insertCell(0);
    celulaTitulo.textContent = "Média das Notas";
  
    // Calcula a média de cada nota para todas as colunas de notas
    for (let i = 1; i <= 9; i++) {
      let soma = 0;
      let contador = 0;
      for (let j = 0; j < totalLinhas; j++) {
        const valor = parseFloat(linhas[j].cells[i].textContent);
        if (!isNaN(valor)) {
          soma += valor;
          contador++;
        }
      }
      const media = soma / contador;
      const novaCelula = novaLinha.insertCell(i);
      novaCelula.textContent = contador > 0 ? media.toFixed(2) : "-";
    }
  }
  
  function adicionarMediaAlunos() {
    const tabela = document.getElementById("tabela-notas");
    const linhas = tabela.getElementsByTagName("tbody")[0].getElementsByTagName("tr");
  
    // Adiciona cabeçalho para a nova coluna
    const th = document.createElement("th");
    th.textContent = "Média do Aluno";
    tabela.getElementsByTagName("thead")[0].rows[1].appendChild(th);
  
    // Adiciona a média de cada aluno no final da linha
    for (let i = 0; i < linhas.length; i++) {
      let soma = 0;
      let contador = 0;
      for (let j = 1; j <= 9; j++) {
        const valor = parseFloat(linhas[i].cells[j].textContent);
        if (!isNaN(valor)) {
          soma += valor;
          contador++;
        }
      }
      const media = soma / contador;
      const novaCelula = linhas[i].insertCell(10);
      novaCelula.textContent = contador > 0 ? media.toFixed(2) : "-";
    }
  }
  