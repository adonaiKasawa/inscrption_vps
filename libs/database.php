<?php

/**
 * 
 */
class Database extends PDO
{

	public function __construct($DB_TYPE, $DB_HOST, $DB_PORT, $DB_NAME, $DB_USER, $DB_PASS)
	{
		parent::__construct($DB_TYPE . ":host=" . $DB_HOST . ";port=" . $DB_PORT . ";dbname=" . $DB_NAME . ";user=" . $DB_USER . ";password=" . $DB_PASS);
	}

	public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
	{
		$query = $this->prepare($sql);
		foreach ($array as $key => $value) {
			$query->bindValue(":$key", $value);
		}
		$query->execute();
		return $query->fetchAll();
	}

	/**
	 * Insert
	 * @param string $table A name of table to Insert into
	 * @param array $data An associative array  
	 */
	public function insert($table, array $data)
	{
		$filedName = '"' . implode('", "', array_keys($data)) . '" ';
		$filedValues = ':' . implode(',:', array_keys($data));
		$query = $this->prepare("INSERT INTO $table  ($filedName) VALUES ($filedValues)");
		foreach ($data as $key => $value) {
			$query->bindValue(":$key", $value);
		}
		return $query->execute();
	}
	/**
	 * update
	 * @param string $table A name of table to Insert into
	 * @param array $data An associative array  
	 * @param array $where the WHERE query part associative array  
	 */
	public function update($table, array $data, $where)
	{
		ksort($data);
		// print_r($data);
		$fieldDetails = null;
		foreach ($data as $key => $value) {
			$fieldDetails .= "`$key` = :$key, ";
		}
		$fieldDetails = rtrim($fieldDetails, ', ');

		$query = $this->prepare("UPDATE  $table SET $fieldDetails  WHERE  $where");
		foreach ($data as $key => $value) {
			$query->bindValue(":$key", $value);
		}
		return $query->execute();
	}

	public function delete($table, $where, $limit = 1)
	{
		return $this->exec("DELETE FROM $table WHERE $where");
		// $query->execute();
	}
}
