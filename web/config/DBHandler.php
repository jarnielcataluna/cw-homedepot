<?php

require_once('config.php');

class DBHandler
{
    private $host = DBHOST;
    private $db = DBNAME;
    private $user = DBUSER;
    private $pwd = DBPWD;
    private $port = DBPORT;
    private $profession =  PROFESSION;
    private $pdo;

    public function __construct($host = null, $db = null, $user = null, $pwd = null, $port = null)
    {
        $this->host = $host ? $host : $this->host;
        $this->db = $db ? $db : $this->db;
        $this->user = $user ? $user : $this->user;
        $this->pwd = $pwd ? $pwd : $this->pwd;
        $this->port = $port ? $port : $this->port;
    }

    public function getConnection()
    {
        return $this->pdo;
    }

    public function connect()
    {
        $this->pdo = new PDO(
            'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db,
            $this->user,
            $this->pwd,
            array(
                PDO::ATTR_PERSISTENT => false
            )
        );

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        if (!$this->pdo) {
            die ("Could not connect to database!\n");
        } else {

        }
    }

    public function isConnected()
    {
        if ($this->pdo) {
            return true;
        } else {
            return false;
        }
    }

    public function buildLeadsTable()
    {
        $sql = 'DROP TABLE IF EXISTS `leads`;
                CREATE TABLE `leads` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `contact` VARCHAR(255) NOT NULL , `gender` VARCHAR(1) NOT NULL ,  `profession_id` INT(1) NOT NULL ,  `email` VARCHAR(255) NOT NULL , `age` INT NOT NULL ,  `date` DATETIME NOT NULL , `claiming_date` DATETIME NOT NULL , `status` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';

        $query = $this->pdo->prepare($sql);
        $query->execute();
    }

    public function buildProfessionTable()
    {
        $sql = 'DROP TABLE IF EXISTS `profession`;
                CREATE TABLE `profession` ( `id` INT NOT NULL AUTO_INCREMENT , `profession` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';

        $query = $this->pdo->prepare($sql);
        $query->execute();
    }

    public function buildCodeTable()
    {
        $sql = 'DROP TABLE IF EXISTS `codes`;
                CREATE TABLE `codes` ( `id` INT NOT NULL AUTO_INCREMENT , `code` VARCHAR(255) NOT NULL , `lead_id` INT NOT NULL, `date` DATETIME NOT NULL, `status` INT NOT NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB;';

        $query = $this->pdo->prepare($sql);
        $query->execute();
    }

    public function initializeProfession()
    {

        foreach (unserialize($this->profession)  as $p) {
            $sql = "INSERT INTO `profession` (`profession`) VALUES (:profession);";
            $query = $this->pdo->prepare($sql);
            $query->execute(array(
                ':profession' => $p,
            ));
        }
    }

    public function initializeCodes(){
        for($x = 1; $x <= 3000; $x++){
            $code = $this->generateEAN($x);
            $status = 1;
            $sql = "INSERT INTO `codes` (`code` , `status`) VALUES (:code, :status);";
            $query = $this->pdo->prepare($sql);
            $query->execute(array(
                ':code' => $code,
                ':status' => $status
            ));
        }
    }

    public function initializeDatabase(){
        $this->buildLeadsTable();
        $this->buildProfessionTable();
        $this->initializeProfession();
        $this->buildCodeTable();
        $this->initializeCodes();
    }

    public function insertLead($data)
    {
        if (!is_null($data)) {
            $now = new DateTime();
            $name = $data['name'];
            $contact = $data['contact'];
            $gender = $data['gender'];
            $profession_id = $data['occupation'];
            $email = $data['email'];
            $age = $data['age'];
            $claiming_date = $data['date'];
            $date = $now->format('Y-m-d H:i:s');
            $status = 1;

            $sql = "INSERT INTO `leads` (`name`, `contact`, `gender`,  `profession_id`,  `email`, `age`, `claiming_date`,  `date`, `status`) VALUES (:name, :contact, :gender, :profession_id, :email, :age, :claiming_date, :date,:status)";
            $query = $this->pdo->prepare($sql);
            if ($query->execute(array(':name' => $name,
                ':contact' => $contact,
                ':gender' => $gender,
                ':profession_id' => $profession_id,
                ':email' => $email,
                ':age' => $age,
                ':claiming_date' => $claiming_date,
                ':date' => $date,
                ':status' => $status))
            ) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getCode($id){
        $sql = "SELECT * FROM `codes` WHERE `id` = :id";
        $query = $this->pdo->prepare($sql);
        $query->execute(array(
            ':id' => $id,
        ));

        $data = $query->fetch(PDO::FETCH_ASSOC);

        return $data['code'];
    }

    function generateEAN($number)
    {
        $code = '200' . str_pad($number, 9, '0');
        $weightflag = true;
        $sum = 0;

        for ($i = strlen($code) - 1; $i >= 0; $i--)
        {
            $sum += (int)$code[$i] * ($weightflag?3:1);
            $weightflag = !$weightflag;
        }
        $code .= (10 - ($sum % 10)) % 10;
        return $code;
    }

}