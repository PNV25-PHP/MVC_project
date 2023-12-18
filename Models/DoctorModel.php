<?php
class DoctorModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllDoctors() {
        $stmt = $this->db->prepare("SELECT * FROM doctors");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
