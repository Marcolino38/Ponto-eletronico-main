Para que funcione, use esse código no terminal:

mysql -uroot -proot

CREATE DATABASE ponto_eletronico;
USE ponto_eletronico;
CREATE TABLE registros (
  id INT AUTO_INCREMENT PRIMARY KEY,
  tipo VARCHAR(10) NOT NULL, -- "entrada" ou "saida"
  horario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  nome VARCHAR(255) NOT NULL
);
