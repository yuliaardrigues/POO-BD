<?php

class PassageiroDAO{
    public function create(Passageiro $passageiro){
        $sql = 'INSERT INTO tbl_passageiro (cpf, dataNascimento, nome, email, telefone) VALUES (?, ?, ?, ?, ?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $passageiro->getCpf());
        $stmt->bindValue(2,  $passageiro->getDataNascimento());
        $stmt->bindValue(3, $passageiro->getNome());
        $stmt->bindValue(4, $passageiro->getEmail());
        $stmt->bindValue(5, $passageiro->getTelefone());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM tbl_passageiro';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll();
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Passageiro $passageiro){
        $sql = 'UPDATE tbl_passageiro SET cpf = ?, dataNascimento = ?, nome = ?, email = ?, telefone = ? WHERE idPassageiro = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $passageiro->getCpf());
        $stmt->bindValue(2,  $passageiro->getDataNascimento());
        $stmt->bindValue(3, $passageiro->getNome());
        $stmt->bindValue(4, $passageiro->getEmail());
        $stmt->bindValue(5, $passageiro->getTelefone());
        $stmt->bindValue(6, $passageiro->getId());

        $stmt->execute();

    }

    public function delete($id){
        $sql = 'DELETE FROM tbl_passageiro WHERE idPassageiro = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }

    
}
