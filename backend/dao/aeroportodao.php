<?php
class AeroportoDAO{
    public function create (Aeroporto $aeroporto) {
        $sql = 'INSERT INTO aeroporto (nome, cidade, estado , cep) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $aeroporto->getNome());
        $stmt->bindValue(2, $aeroporto->getCidade());
        $stmt->bindValue(3, $aeroporto->getEstado());
        $stmt->bindValue(4, $aeroporto->getCep());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM aeroporto';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }
    
    public function update(Aeroporto $aeroporto){
        $sql = 'UPDATE aeroporto SET  cidade = ?, estado = ?, cep = ? WHERE idAeroporto = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,  $aeroporto->getCidade());
        $stmt->bindValue(2, $aeroporto->getEstado());
        $stmt->bindValue(3, $aeroporto->getCep());
        $stmt->bindValue(4, $aeroporto->getIdAeroporto());

        $stmt->execute();

    }

    public function delete($idAeroporto){
        $sql = 'DELETE FROM aeroporto WHERE idAeroporto = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $idAeroporto);

        $stmt->execute();
    }

    public function readAeroporto($id){
        $sql = 'SELECT * FROM aeroporto WHERE idAeroporto = '.$id.';';



        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

       
        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }
    
  
}
