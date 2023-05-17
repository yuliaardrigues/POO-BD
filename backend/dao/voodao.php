<?php
class VooDAO {
    public function create (Voo $voo) {
        $sql = 'INSERT INTO voo ( horarioPartida, horarioChegada, idAeroportoChegada, idAeroportoSaida, idAviao) VALUES (?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        // $stmt->bindValue(1, $voo->getPassagemDisponivel());
        $stmt->bindValue(1, $voo->getHorarioPartida());
        $stmt->bindValue(2, $voo->getHorarioChegada());
        $stmt->bindValue(3, $voo->getIdAeroportoChegada());
        $stmt->bindValue(4, $voo->getIdAeroportoPartida());
        $stmt->bindValue(5, $voo->getIdAviao());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM voo';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }
    
    public function update(Voo $voo){
        $sql = 'UPDATE voo SET passagemDisponivel = ?, horarioPartida = ?, horariChegada = ?,idAeroporto = ?, idAviao = ?  WHERE idVoo = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,  $voo->getPassagemDisponivel());
        $stmt->bindValue(2, $voo->getHorarioPartida());
        $stmt->bindValue(3, $voo->getHorarioChegada());
        $stmt->bindValue(5, $voo->getIdAviao());
        $stmt->bindValue(6, $voo->getIdVoo());

        $stmt->execute();

    }

    public function delete($id){
        $sql = 'DELETE FROM voo WHERE idVoo = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }

    public function readVoo($id){
        $sql = 'SELECT * FROM voo WHERE '.$id.';';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

       
       
            $resultado = $stmt->fetchAll();
            return $resultado;
        
    }
  
}
?>
