<?php

/**
 * Description of Singleton
 *
 * @author Christian
 */
class Singleton {

    const SERVER = "localhost";
    const DBNAME = "blogv1";
    const USER = "root";
    const PWD = "";

    private $dsn;
    public $db;

    /**
     * @var Singleton
     * @access private
     * @static
     */
    private static $_instance = null;

    /**
     * Constructeur de la classe
     *
     * @param void
     * @return void
     */
    private function __construct() {
        
    }

    public static function getMysqlConnexion() {
// PDO
        $this->dsn = "mysql:dbname=" . DBNAME . ";host=" . SERVER . ";charset=utf8";

        $this->db = new PDO($this->dsn, USER, PWD);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// détruire les autres variables
        unset(SERVER, DBNAME, USER, PWD, $this->dsn);
    }

    /**
     * Méthode qui crée l'unique instance de la classe si elle n'existe pas encore puis la retourne.
     *
     * @param void
     * @return Singleton
     */
    public static function getInstance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new Singleton();
        }
        return self::$_instance;
    }

}
