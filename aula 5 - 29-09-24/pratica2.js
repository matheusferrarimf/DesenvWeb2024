function adicionarLinhaTotalizadora() {
    console.log("teste")
    const table = document.querySelector('table');
    const rows = table.rows;
    const totalRow = document.createElement('tr');
    const emptyCell = document.createElement('td');
    emptyCell.textContent = 'Média';
    totalRow.appendChild(emptyCell);

    for (let col = 1; col < rows[0].cells.length; col++) {
        let sum = 0;
        let count = 0;
        for (let row = 2; row < rows.length; row++) { // começa da terceira linha (índice 2)
            const cellValue = parseFloat(rows[row].cells[col].textContent);
            if (!isNaN(cellValue)) {
                sum += cellValue;
                count++;
            }
        }
        const avgCell = document.createElement('td');
        avgCell.textContent = (count > 0) ? (sum / count).toFixed(2) : '-';
        totalRow.appendChild(avgCell);
    }

    table.appendChild(totalRow);
}

function adicionarColunaTotalizadora() {
    const table = document.querySelector('table');
    const rows = table.rows;

    // Adiciona o cabeçalho da coluna
    const headerCell = document.createElement('th');
    headerCell.textContent = 'Média';
    rows[0].appendChild(headerCell);
    rows[1].appendChild(document.createElement('td')); // célula vazia na segunda linha

    for (let row = 2; row < rows.length; row++) { // começa da terceira linha (índice 2)
        let sum = 0;
        let count = 0;
        for (let col = 1; col < rows[row].cells.length; col++) {
            const cellValue = parseFloat(rows[row].cells[col].textContent);
            if (!isNaN(cellValue)) {
                sum += cellValue;
                count++;
            }
        }
        const avgCell = document.createElement('td');
        avgCell.textContent = (count > 0) ? (sum / count).toFixed(2) : '-';
        rows[row].appendChild(avgCell);
    }
}