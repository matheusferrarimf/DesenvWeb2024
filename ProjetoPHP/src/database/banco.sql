INSERT INTO dispositivos (id_dispositivo, nome_dispositivo, status)
VALUES
(1, 'Dispositivo 1', TRUE),
(2, 'Dispositivo 2', TRUE),
(3, 'Dispositivo 3', FALSE);

INSERT INTO perguntas (id_pergunta, texto_pergunta, status)
VALUES
(1, 'Como você avalia a qualidade do nosso atendimento?', TRUE),
(2, 'Como você avalia a limpeza do ambiente?', TRUE),
(3, 'Como você avalia o tempo de espera pelo atendimento?', TRUE),
(4, 'Quão satisfeito você está com os nossos serviços?', TRUE),
(5, 'Você recomendaria nossos serviços para outras pessoas?', TRUE);

INSERT INTO avaliacoes (id_avaliacao, id_setor, id_pergunta, id_dispositivo, resposta, feedback, data_hora)
VALUES
(1, 1, 1, 1, 8, 'Bom atendimento', '2024-11-28 10:00:00'),
(2, 1, 2, 2, 9, 'Ambiente limpo', '2024-11-28 10:05:00'),
(3, 2, 3, 3, 10, 'Atendimento rápido', '2024-11-28 10:10:00');
