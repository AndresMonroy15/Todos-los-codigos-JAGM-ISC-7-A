<?php
class IpModel {

    private $conn;

    public function __construct($db_conn) {
        $this->conn = $db_conn;
    }

    public function getAll() {
        $sql = "SELECT * FROM direcciones_ip";
        $result = $this->conn->query($sql);
        $data = [];
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function add($direccion_ip, $usuario, $inventario, $area) {
        $sql = "INSERT INTO direcciones_ip (direccion_ip, usuario, inventario, area) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $direccion_ip, $usuario, $inventario, $area);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM direcciones_ip WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
