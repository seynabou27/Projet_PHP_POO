<?php 
    namespace APP\Core;
    class Request{
        private function formatUrl(){
            $url=explode('/',$_SERVER['REQUEST_URI']);
            unset($url[0]);
            return array_values($url);
        }
        public function getUrl(){
           $url = $this->formatUrl();
           return [$url[0],$url[1]];
        }
        public function isGet():bool{
           return $_SERVER['REQUEST_METHOD']=='GET';
        }
        public function isPost():bool{
            return $_SERVER['REQUEST_METHOD']=='POST';
        }
        //recupere les parametres de la requette
        public function query(){
            $url=$this->formatUrl();
            unset($url[0]);
            unset($url[1]);
            return array_values($url);
        }
        public function request(){
            return $_POST;
        }
    }
?>