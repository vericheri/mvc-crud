<?php
class menu {
    private $conn;
    public function __construct($db) {
        $this->conn = $db;
    }
    public function getall() {
        return $this->conn->query("SELECT * FROM menu");
    }
    public function getbyid($id) {
        return $this->conn->query("SELECT * FROM menu WHERE id=$id");
    }
    public function buat($minuman, $harga) {
        return $this->conn->query("INSERT INTO menu(minuman, harga) VALUES ('$minuman', '$harga')");
    }
    public function update($id, $minuman, $harga) {
        return $this->conn->query("UPDATE menu SET minuman=$minuman, harga=$harga WHERE id=$id");
    }
    public function hapus($id) {
        return $this->conn->query("DELETE FROM menu WHERE id=$id");
    }
}
?>