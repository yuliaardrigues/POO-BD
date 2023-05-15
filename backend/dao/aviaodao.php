<?php
class aviaodao{
    public function create (aviao $aviao){
        $sql = 'INSERT INTO aviao (idAviao, modelo, capacidade, fabricante) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $aviao->getIdaviao());
        $stmt->bindValue(2, $aviao->getModelo());
        $stmt->bindValue(3, $aviao->getCapacidade());
        $stmt->bindValue(4, $aviao->getFabricante());
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
    
    public function update(aviao $aviao){
        $sql = 'UPDATE aviao SET idAviao = ?, modelo = ?, capacidade = ?, fabricante = ? WHERE idAviao = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $aviao->getIdaviao());
        $stmt->bindValue(2,  $aviao->getModelo());
        $stmt->bindValue(3, $aviao->getCapacidade());
        $stmt->bindValue(4, $aviao->getFabricante());

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