<?php
class VooDAO {
    public function create (Voo $voo) {
        $sql = 'INSERT INTO voo (idVoo, qtAssentos, horarioPartida, horarioChegada, idAeroporto, idAviao) VALUES (?,?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $voo->getIdVoo());
        $stmt->bindValue(2, $voo->getPassagemDisponivel());
        $stmt->bindValue(3, $voo->getHorarioPartida());
        $stmt->bindValue(4, $voo->getHorarioChegada());
        $stmt->bindValue(5, $voo->getIdAeroporto());
        $stmt->bindValue(6, $voo->getIdAviao());

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
        $stmt->bindValue(4, $voo->getIdAeroporto());
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
  
}
?>
