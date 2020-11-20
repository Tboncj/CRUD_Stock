<?php
include_once "config/db.php";
include_once "Models/stockModel.php";

class StockController
{
    private $model;
    function __construct()
    {
        $this->model = new StockModel();;
    }

    public function listarStock()
    {
        #instanciamos la clase de modelo stock
        // $model = new StockModel();
        #y ejecutamos el metodo para obtener los registros del stock
        $Stock = $this->model->listarStock();
        $colores = $this->model->agruparColorStock();
        #ejecutamos la Vista donde mostraremos los registros
        require_once('Views/stock.php');
    }
    public function buscarStock()
    {
        $xcad = $_POST['cadena'];
        $xcat = $_POST['categoria'];
        $xpre = $_POST['precio'];

        # Creamos la variable para almacenar el registro 
        $Stock = $this->model->buscarStockModel($xcad, $xcat, $xpre);

        $colores = $this->model->agruparColorStock();
        #ejecutamos la Vista donde mostraremos los registros
        require_once('Views/stock.php');
    }
    public function grabarStock()
    {
        $xfrm = $_POST;

        $this->model->grabarStockModel($xfrm);

        $Stock = $this->model->listarStock();
        self::listarStock();


    }
    public function editarStock()
    {
        # determinamos si esta buscando o grabando
        $metodo = $_SERVER["REQUEST_METHOD"];
        if ($metodo=='POST') {
            # obtenemos los campos enviados en el form
            $xfrm = $_POST;
            $this->model->guardarStockModel($xfrm);
            self::listarStock();
        }else {
            # solicito editar un registro
            $id = $_GET['id'];
            $frm = $this->model->buscarxIdStockModel($id);
            #mostramos la vista con los datos obtenidos
            include('Views/editarStock.php');
        }
        
    }
    public function eliminarStock()
    {
        $id = $_GET['id'];

        $this->model->eliminarStockModel($id);

        $Stock = $this->model->listarStock();
        self::listarStock();
    }
    
    
}

?>