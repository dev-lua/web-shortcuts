DROP TABLE IF EXISTS db_atalhos.atalhos;

CREATE TABLE db_atalhos.atalhos (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    titulo VARCHAR(30) NOT NULL,
    img_logo VARCHAR(30) NOT NULL,
    subtitulo1 VARCHAR(255) NOT NULL,
    link_subtitulo1 VARCHAR(255) NOT NULL,
    subtitulo2 VARCHAR(255),
    link_subtitulo2 VARCHAR(255) 
);

-- Inserção da dados para teste
INSERT INTO atalhos (id, titulo, img_logo, subtitulo1, link_subtitulo1, subtitulo2, link_subtitulo2)
VALUES (1, 'Minha OI', 'logo_minha_oi', 'Boleto/Fatura/2ºVia', 'https://www.oi.com.br/minha-oi/codigo-de-barras/', 'Entrar em Conta', 'https://login.oi.com.br/nidp/idff/sso?id=loginsegurancasso&sid=2&option=credential&sid=2&target=https%3A%2F%2Fminha.oi.com.br%2Fminhaoi%2Fcodigo-de-barras%2F');