<?php

class PassagemDAO{

    public function create(Passagem $passagem){
        $sql = 'INSERT INTO passagem (idVoo, idPassageiro) VALUES (?, ?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $passagem->getIdVoo());
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

    public function update(Passagem $passagem){
        $sql = 'UPDATE passagem SET codigoAssento = ?, idVoo = ?, idPassageiro = ? WHERE idPassagem = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $passagem->getCodigoAssento());
        $stmt->bindValue(2, $passagem->getIdVoo());
        $stmt->bindValue(3, $passagem->getIdPassageiro());
        $stmt->bindValue(4, $passagem->getIdPassagem());

        $stmt->execute();
    }

    public function delete($id){
        $sql = 'DELETE FROM passagem WHERE idPassagem = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }

}

?>
