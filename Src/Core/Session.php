<?php 
    namespace APP\Core;
   class Session{

       public function start(){
            if (session_status()== PHP_SESSION_NONE) {
                session_start();
            }
       }
       public function keyExists(string $key){
            return isset($_SESSION[$key]);
       }
       public function getSession(string $key){
            return $_SESSION[$key];
       }

       public function setSession(string $key,$data):void{
            $_SESSION[$key] = $data;
       }
        public function removekey(string $key):void{
            unset($_SESSION[$key]);
        }   

        public function destroySession():void{
            session_destroy();
        }
   }
    
?>