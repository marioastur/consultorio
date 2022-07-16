<?php

    namespace App\Models;

    use App\Database;

    class Coders{
        
        private ?int $id;        
        private string $coder;
        private string $issue;
        private ?string $date_time;
        private $database;
        private $table = "appointments";

        public function __construct(int $id = null, string $coder = '', string $issue = '', string $date_time = null){
            
            $this->id = $id;
            $this->coder = $coder;
            $this->issue = $issue;
            $this->date_time = $date_time;
        
            if(!$this->database){
                $this->database = new Database();
            }
        }

        
        public function all(){
            $query = $this->database->mysql->query("SELECT * FROM {$this->table}");
            $coderArray = $query->fetchAll();

            $coderList = [];

            foreach ($coderArray as $coder) {
                
                $coderItem = new Coders(
                    $coder["id"], 
                    $coder["coder"], 
                    $coder["issue"], 
                    $coder["date_time"]
                );
                
                array_push($coderList, $coderItem);
            }

            return $coderList;
        }

        public function getID(){
            return $this->id;
        }

        public function getCoder(){
            return $this->coder;
        }

        public function getIssue(){
            return $this->issue;
        }

        public function getDate_time(){
            return $this->date_time;
        }

        public function findById($idToFind){
            $query = $this->database->mysql->query("SELECT * FROM {$this->table} where id={$idToFind}");
            $resul = $query->fetchAll();
            return new Coders($resul[0]["id"],$resul[0]["coder"],$resul[0]["issue"],$resul[0]["date_time"]);
        }

        public function destroy(){
            $query = $this->database->mysql->query("DELETE FROM {$this->table} where {$this->table}.id = {$this->id}");
        }

        public function saveCoder(){
            $this->database->mysql->query("INSERT INTO {$this->table} ('coder','issus') values ($this->coder,$this->issue)");

        }

    }

?>