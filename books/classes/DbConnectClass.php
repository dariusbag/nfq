<?php
// http://culttt.com/2012/10/01/roll-your-own-pdo-php-class/
class DbConnect{
    private $host      = 'localhost';
    private $dbname    = 'ruslanas_darius';
    private $charset    = 'utf8';
    private $user      = 'ruslanas_darius';
    private $pass      = '';
 
public $test = 'Test from connect';
    protected $dbConn;
    private $error;
 
    public function __construct(){
        // Set DSN
        $dsn = 'mysql:host='. $this->host .';dbname='. $this->dbname .';charset='. $this->charset;
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
        // Create a new PDO instanace
        try{
            $this->dbConn = new PDO($dsn, $this->user, $this->pass, $options);
			// echo 'Connected';
        }
        // Catch any errors
        catch(PDOException $e){
            $this->error = $e->getMessage();
			// echo $this->error;
            die();
        }
    }
}	
?>
