<?php

namespace App\Controllers;

use Core\Controller;
use PDO;
use Core\Database;

class HistController extends Controller
{

  public function historico(){
    $db = Database::connect();
    try {
        // Consulta para buscar todos os agendamentos
        $query = "SELECT * FROM registros ORDER BY horario";
        $stmt = $db->prepare($query);
        $stmt->execute();
    
        $_SESSION['reg'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erro ao buscar agendamentos: " . $e->getMessage());
    }
    $this->view('/hist/historico');
  }
}