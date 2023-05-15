<?php
class vooDAO {
    public function create (voo $voo) {
        $sql = 'INSERT INTO voo (idVoo, passagemDisponivel, horarioPartida, horarioChegada, idAeroporto, idAviao) VALUES (?,?,?,?,?,?)';
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
    
    public function update(voo $voo){
        $sql = 'UPDATE voo SET idVoo = ?, passagemDisponivel = ?, horarioPartida = ?, horariChegada = ?,idAeroporto = ?, idAviao = ?  WHERE idVoo = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $voo->getIdVoo());
        $stmt->bindValue(2,  $voo->getPassagemDisponivel());
        $stmt->bindValue(3, $voo->getHorarioPartida());
        $stmt->bindValue(4, $voo->getHorarioChegada());
        $stmt->bindValue(5, $voo->getIdAeroporto());
        $stmt->bindValue(6, $voo->getIdAviao());


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