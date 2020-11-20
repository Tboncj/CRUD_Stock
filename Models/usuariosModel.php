<?php


class UsuariosModel extends DB
{
    
    public function userExist($usr, $pss)
    {
        
        try {
            $sql = "SELECT * FROM usuarios WHERE nombre = :user AND password = :pss";
        
            $data = $this->con->prepare($sql);
            
            $data->execute(['user'=>$usr, 'pss'=>$pss]);

            if ( $data->rowCount() ) {
                return TRUE;
            }else{
                return FALSE;
            }
        } catch (Exception $th) {
            return $th->getMessage();
        }

    }
}

?>