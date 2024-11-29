<?php

namespace App\Controllers;

use Core\Controller;
use Core\Database;

class RegController extends Controller
{
    public function register(){
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nome = $_POST["nome"];
            $tipo = $_POST["tipo"];

            $db = Database::connect();
        
            if (!empty($nome)) {
                $stmt = $db->prepare("INSERT INTO registros (nome, tipo) VALUES (:nome, :tipo)");
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":tipo", $tipo);
                $stmt->execute();
                $mensagem = "Ponto de $tipo registrado com sucesso para $nome!";
            } else {
                $erro = "O campo Nome é obrigatório!";
            }
        }
    $this->view('home/index');
    }
}

