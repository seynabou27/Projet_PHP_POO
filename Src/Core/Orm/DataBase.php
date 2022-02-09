<?php 
    namespace App\Core\Orm;
    use \PDO;
    use PDOException;
    
    class DataBase {
        //pdo=null=> connexion est fermée
        ///private PDO|null $pdo=null;
        //private int | float $x
        private const USER_BD="";
        private const PASSWORD_BD="";
        private const HOST_BD="";

        public function __construct(){
            $this->openConnexion();
        }
       

        function openConnexion(){
            try{  
                if ($this->pdo==null) {
                    $this->pdo = new \PDO(self::HOST_BD,self::USER_BD,self::PASSWORD_BD);
                }  
                
                 $this-> pdo->setAttribute(\PDO::ATTR_CASE,\PDO::CASE_LOWER);
                 $this-> pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
                 $this-> pdo->setAttribute(\PDO::MYSQL_ATTR_INIT_COMMAND,"SET NAMES 'UTF8'");
            
                 //$pdo = new PDO(Constantes::CHAINE_DE_CONNECTION, Constantes::USER_BD, Constantes::PASSWORD_BD, $options);
                 //return $pdo;
             }
             catch (PDOException $e){
                  die ($e->getMessage());
             }
           }
    
        public function executeSelect(string $sql,$single=False):array{
            return [];
        }
    
        public function executeUpdate(string $sql):int{
            return 0;
    
        }

        
        
    }




?>