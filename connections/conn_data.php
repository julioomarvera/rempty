<?php
require_once $dir_fc."connections/conn_config.php";

class BD
{

	private $_dbUser;
	private $_dbPassword;
	private $_dbHost;
	protected $_dbName;
	public $_connection;
	private static $_instance;

	public function __construct()
	{
		try {
			$this->_dbHost = DB_HOST;
			$this->_dbUser = DB_USER;
			$this->_dbPassword = DB_PASS;
			$this->_dbName = DB_NAME;

			$this->_connection = new \PDO('mysql:host='.$this->_dbHost.'; dbname='.$this->_dbName, $this->_dbUser, $this->_dbPassword);
			$this->_connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$this->_connection->exec("SET CHARACTER SET utf8");
		}
		catch (\PDOException $e)
		{
			print "Error!: " . $e->getMessage();
			die();
		}
	}

/*
	public function beginTransaction(){
		return $this->_connection->beginTransaction();
	}

	public function commit(){
		return $this->_connection->commit();
	}

	public function rollback(){
		return $this->_connection->rollBack();
	}
	public function lastInsertId(){
		return $this->_connection->lastInsertId();
	}
*/
	public function prepare($sql)
	{
		return $this->_connection->prepare($sql);
	}

	public function conexion()
	{
		return $this->_connection;
	}

	//[instance singleton]
	public static function instance()
	{
		if (!isset(self::$_instance))
		{
			$class = __CLASS__;
			self::$_instance = new $class;
		}
		return self::$_instance;
	}

	/**[__clone Evita que el objeto se pueda clonar]
	 * @return [type] [message] */
	public function __clone()
	{
		trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	}
}

?>
