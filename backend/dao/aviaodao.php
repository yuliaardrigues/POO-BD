<?php
class AviaoDAO{
    public function create (Aviao $aviao){
        $sql = 'INSERT INTO aviao (modelo, capacidade, fabricante) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $aviao->getModelo());
        $stmt->bindValue(2, $aviao->getCapacidade());
        $stmt->bindValue(3, $aviao->getFabricante());
        $stmt->execute();
    }
    
    public function read(){
        $sql = 'SELECT * FROM aviao';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }
    
    public function update(Aviao $aviao){
        $sql = 'UPDATE aviao SET modelo = ?, capacidade = ?, fabricante = ? WHERE idAviao = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,  $aviao->getModelo());
        $stmt->bindValue(2, $aviao->getCapacidade());
        $stmt->bindValue(3, $aviao->getFabricante());
        $stmt->bindValue(4, $aviao->getIdAviao());
        
        $stmt->execute();

    }
    public function delete($idAviao){
        $sql = 'DELETE FROM aviao WHERE idAviao = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $idAviao);

        $stmt->execute();
    }
}

?>
