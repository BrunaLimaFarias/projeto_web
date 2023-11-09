DROP DATABASE IF EXISTS projeto_web;
CREATE DATABASE projeto_web;
USE projeto_web;

CREATE TABLE produtos (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(45) NOT NULL,
    preco DECIMAL(10, 0) NOT NULL,
    img TEXT NOT NULL
);

CREATE TABLE adm (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(45) NOT NULL,
    senha DECIMAL(10, 0) NOT NULL
);

CREATE TABLE carrinho (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_produto INT NOT NULL,
	quantidade INT NOT NULL,
	FOREIGN KEY (id_produto) REFERENCES produtos(id)
);



INSERT INTO produtos(titulo, preco, img) VALUES
	('Be Nature Maracuja', 99.99,  '../Img/biscoito_be_nature.png'),
    ('Sache Adulto', 99.99,  '../Img/sache_adulto.png'),
    ('Sache Filhote', 99.99,  '../Img/sache_filhote.png'),
    ('Ração Vittamax', 99.99,  '../Img/racao_vittamax.png'),
    ('Ração Pedigree', 99.99,  '../Img/racao_pedigree.png'),
    ('Petisco Dental', 99.99,  '../Img/petisco_dental.png');

INSERT INTO adm(email, senha) VALUES
	('bruna@gmail','123');
    
INSERT INTO carrinho(id_produto, quantidade) VALUES
	(1, 1);
/*
SELECT p.titulo, p.preco, p.img, p.quantidade
FROM produtos p
INNER JOIN carrinho c ON c.produtos = p.id
GROUP BY p.id;
*/
