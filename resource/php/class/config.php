<?php

class config{
    private $user = 'port7639_montecillomarco';
    private $password = 'marco123';
    public $pdo = null;

    public function con(){
        try {
            // $this->pdo = new PDO('mysql:host=127.0.0.1:3307;dbname=classrecordlist', $this->user, $this->password);
            $this->pdo = new PDO('mysql:local=109.106.254.158;dbname=port7639_classrecordlist', $this->user, $this->password);
            } catch (PDOException $e) {
                die($e->getMessage());
        }
        return $this->pdo;

    }
}

 ?>
