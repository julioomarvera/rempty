<?php
require_once $dir_fc."connections/conn_config_externo.php";

class BDEX
{

	private $_dbUser_ex;
	private $_dbPassword_ex;
	private $_dbHost_ex;
	protected $_dbName_ex;
	public $_connection_ex;
	private static $_instance_ex;

	public function __construct()
	{
		try {
			$this->_dbHost_ex = DB_HOST_EX;
			$this->_dbUser_ex = DB_USER_EX;
			$this->_dbPassword_ex = DB_PASS_EX;
			$this->_dbName_ex = DB_NAME_EX;

			$this->_connection_ex = new \PDO('mysql:host='.$this->_dbHost_ex.'; dbname='.$this->_dbName_ex, $this->_dbUser_ex, $this->_dbPassword_ex);

			$this->_connection_ex->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$this->_connection_ex->exec("SET CHARACTER SET utf8");
		}
		catch (\PDOException $e)
		{
			var_dump('mysql:host='.$this->_dbHost_ex.'; dbname='.$this->_dbName_ex, $this->_dbUser_ex, $this->_dbPassword_ex);
			("aquiii");
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
		return $this->_connection_ex->prepare($sql);
	}

	public function conexion()
	{
		return $this->_connection_ex;
	}

	//[instance singleton]
	public static function instance()
	{
		if (!isset(self::$_instance_ex))
		{
			$class = __CLASS__;
			self::$_instance_ex = new $class;
		}
		return self::$_instance_ex;
	}

	/**[__clone Evita que el objeto se pueda clonar]
	 * @return [type] [message] */
	public function __clone()
	{
		trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	}
}

?>
