<?php

class Review {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getReview($data) {
        $st = $this->conn->prepare(
        "SELECT r.comentario, r.valoracion, u.nombre FROM resenas r INNER join usuarios u on r.id_usuario = u.id_usuario WHERE r.valoracion = ?");
        $st->execute([floatval($data)]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllReviews($empezar_desde, $resultados_por_pagina) {
        $st = $this->conn->query("SELECT r.comentario, r.valoracion, u.nombre 
        FROM resenas r
        inner join usuarios u
        on r.id_usuario = u.id_usuario
        LIMIT $empezar_desde, $resultados_por_pagina");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRating($user) {
        $st = $this->conn->prepare("SELECT ROUND(AVG(valoracion), 1) as rating FROM resenas WHERE id_usuario = ?");
        $st->execute([$user]);
        return $st->fetch(PDO::FETCH_ASSOC);
    }
    
}

?>