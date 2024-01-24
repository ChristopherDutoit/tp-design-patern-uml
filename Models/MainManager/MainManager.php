<?PHP

require_once("Services/Model/Model.php");
class MainManager extends Model
{
    /**
     * Fonction permettant de simuler une récupération de données
     * depuis une bdd ou autre
     */
    public function getDataX(){
        $data = [
            "data1" => "a",
            "data2" => "b",
        ];
        return $data;
    }

    public function getDatas(){
        $req = $this->getBdd()->prepare("SELECT * FROM matable");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
}