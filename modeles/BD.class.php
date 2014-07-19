<?php
class BD {

    private static $instance = null;
    private $idbd;

    private function __construct($base, $param) {
        require_once(BASE."/modeles/".$param.".inc.php");
        $this->idbd = new mysqli(HOST,USER,PASS,$base);
        $this->idbd->set_charset("utf8");
        if (!$this->idbd) {
            throw new Exception("Connexion Impossible à la base de données : ".HOST);
        }
    }
    
    public static function getInstance($base, $param) {
        if(is_null(self::$instance)) {
            self::$instance = new BD($base, $param);
        }
        return self::$instance;
    }

    public function getBD(){
        return $this->idbd;
    }
}
?>
