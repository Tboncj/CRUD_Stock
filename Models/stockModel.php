<?php 

class StockModel extends DB
{
    public function listarStock()
    {
        #consultamos la tabla stock
        $sql = "SELECT * FROM stock";
        $data = $this->con->prepare($sql);
        
        $data->execute();
        #retornamos los datos como objeto
        return $data->fetchAll(PDO::FETCH_OBJ);
    }
    public function buscarStockModel($cad,$cat, $pre)
    {
        try {
            $filtro = "";
            $params = array();
            if ($cat != '') {
                $filtro = " AND color =:c";
                $params['c'] = $cat;
            }
            if ($pre != '') {
                $filtro .= " AND precio BETWEEN 0 AND :p ";
                $params['p'] = $pre;
            }
            if ($cad != '') {
                $filtro .= " AND (nombre LIKE :n or descripcion LIKE :d )";
                $params['n'] = "%" . $cad . "%";
                $params['d'] = "%" . $cad . "%";
            }

            #consultamos la tabla stock
            $sql = "SELECT * FROM stock WHERE 1 " . $filtro;
            $data = $this->con->prepare($sql);

            $data->execute($params);

            #retornamos los datos como objeto
            return $data->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            die( $th->getMessage());
        }
    }
    public function buscarxIdStockModel($id)
    { 
        #consultamos la tabla stock
        $sql = "SELECT * FROM stock WHERE IdStock =? "  ;
        $data = $this->con->prepare($sql);

        $data->execute([$id]);

        #retornamos los datos como objeto
        return $data->fetch(PDO::FETCH_OBJ);
    }
    public function agruparColorStock()
    {
        #consultamos la tabla stock
        $sql = "SELECT DISTINCT UCASE(color) color FROM stock WHERE color<>''";
        $data = $this->con->prepare($sql);

        $data->execute();
        #retornamos los datos como objeto
        return $data->fetchAll(PDO::FETCH_OBJ);
    }
    public function grabarStockModel($frm)
    {
        try {
            $frm = json_encode($frm);
            $frm = json_decode($frm);

            $sql = "INSERT INTO stock (nombre,cantidad,color,precio,descripcion ) VALUES (?,?,?,?,?) ";
            $data = $this->con->prepare($sql);

            $data->execute([$frm->nombre, $frm->cantidad, $frm->color, $frm->precio, $frm->descripcion]);
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }
    public function guardarStockModel($frm)
    {
        try {
            $frm = json_encode($frm);
            $frm = json_decode($frm);

            $sql = "UPDATE stock SET nombre=?,cantidad=?,color=?,precio=?,descripcion=?  WHERE IdStock=?";
            $data = $this->con->prepare($sql);

            $data->execute([$frm->nombre, $frm->cantidad, $frm->color, $frm->precio, $frm->descripcion, $frm->id]);
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }
    public function eliminarStockModel($id)
    {
        try {
            #consultamos la tabla stock
            $sql = "DELETE FROM stock WHERE IdStock =? ";
            $data = $this->con->prepare($sql);

            $data->execute([$id]);
            #retornamos los datos como objeto
        } catch (Exception $th) {
            $th->getMessage();
        }
    }
}

?>