<?php
require_once __DIR__ . '/../model/IpModel.php';
require_once __DIR__ . '/../config.php';

class IpController {

    private $model;

    public function __construct($db_conn) {
        $this->model = new IpModel($db_conn);
    }

    // Mostrar todas las IPs
    public function index() {
        $ips = $this->model->getAll();
        include __DIR__ . '/../view/lista.php';
    }

    // Guardar una nueva IP
    public function store($data) {
        $direccion_ip = $data['direccion_ip'];
        $usuario = $data['usuario'];
        $inventario = $data['inventario'];
        $area = $data['area'];

        $this->model->add($direccion_ip, $usuario, $inventario, $area);

        header("Location: index.php"); // redirige a la lista
        exit;
    }

    // Eliminar una IP
    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
        exit;
    }
}
?>
