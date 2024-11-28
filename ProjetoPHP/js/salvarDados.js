function salvarNota(valor, idPergunta, idSetor = 1, idDispositivo = 1, feedback = '') {
    console.log(`Chamando salvarNota: Nota: ${valor}, Pergunta: ${idPergunta}, Setor: ${idSetor}, Dispositivo: ${idDispositivo}`);
    
    fetch('../src/controllers/salvar_resposta.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            nota: valor,
            id_pergunta: idPergunta,
            id_setor: idSetor,
            id_dispositivo: idDispositivo,
            feedback: feedback
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log('Resposta do servidor ao salvar:', data); // Log do retorno do PHP
    })
    .catch(error => {
        console.error('Erro ao salvar:', error);
    });
}
