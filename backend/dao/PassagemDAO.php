<?php

class PassagemDAO{

    public function create(Passagem $passagem){
        $sql = 'INSERT INTO passagem (codigoAssento, idPassageiro) VALUES (?, ?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $passagem->getCodigoAssento());
        $stmt->bindValue(2, $passagem->getIdPassageiro());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM passagem';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll();
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Compra $compra){
       
    }

    public function delete($id){
        $sql = 'DELETE FROM passagem WHERE idCompra = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }



}

?>
