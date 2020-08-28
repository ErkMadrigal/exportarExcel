<?php 
    class consultas{
        public function getData(){
            $respuesta = null; 

            try {
                $sql ="SELECT * FROM almacen ";
                $database = new database();
                $db = $database->getConnection();
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $respuesta = $stmt->fetchAll();
            } catch (PDOException $e) {
                $respuesta = '{"error:{"text":'. $e->getMessage() .'}}';
            }

            return $respuesta;
        }
    }
?>