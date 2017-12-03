<?php

abstract class Active { 

	static function getTableName(){} 
	public static function delete(){
		$tabela = static::$tableName;
		$idColumn = static::$key;
		database::getConnection()->query("delete from {$tabela} where {$idColumn} = {$id}");
	} 
	public static function getAll(){ 
        $trazenaKlasa = get_called_class(); 		 
		$tableName = static::$tableName; 
		$q = database::getConnection()->query("select * from {$tableName}");
		$q->setFetchMode(PDO::FETCH_ASSOC);
		$res = [];
		while($rw=$q->fetchall()){
			$res[] = $rw;
		}
		return $res;
	}
	public static function getById($menu_id){ 
		
        $tabela = static::$tableName;
        $idColumn = static::$key; 
		$q = database::getConnection()->query("select * from {$tabela} where {$idColumn} = {$menu_id}");
		$q->setFetchMode(PDO::FETCH_CLASS,get_called_class());
		return $q->fetch();
	}

	public static function getAllById($menu_id){ 
		
        $tabela = static::$tableName;
        $idColumn = static::$key; 
		$q = database::getConnection()->query("select * from {$tabela} where {$idColumn} = {$menu_id}");
		$q->setFetchMode(PDO::FETCH_CLASS,get_called_class());
		return $q->fetchAll();
	}
	
	public function generateFields(){
		$rezultat = "";
		$keyColumn = static::$key;
		foreach($this as $k=>$v){
			if($k==$keyColumn){
				continue;
			}
			$rezultat.=$k."='{$v}',";
		} 
		return rtrim($rezultat,",");
	}
	
	public function insert(){
		$tableName = static::$tableName;
		$idColumn = static::$key;
		$conn = database::getConnection(); 
		$q = "insert into {$tableName} set "; 
		$q .= $this->generateFields(); 
		$conn->exec($q);
		$this->$idColumn = $conn->lastInsertId();
	}
	public function update(){
		$tableName = static::$tableName;
		$idColumn = static::$key;
		$conn = Database::getConnection(); 
		$q = "update {$tableName} set ";
		$q .= $this->generateFields();
		$idColString = $this->$idColumn;
		$q .= " where {$idColumn} = {$idColString}";  
		echo $q;
		$conn->exec($q);
	} 

	public static function getOtherArticles($menu_id)
	{
		$tabela = static::$tableName;
        $idColumn = static::$key; 
		$q = database::getConnection()->query("select * from {$tabela} where {$idColumn} != {$menu_id} LIMIT 2");
		$q->setFetchMode(PDO::FETCH_CLASS,get_called_class());
		return $q->fetchall();
	}
    
   public static function insertEmailMessage($fullName, $email, $message)
	{
		$tabela = static::$tableName;

		$q = database::getConnection()->prepare("INSERT INTO {$tabela} (full_name, email, message) VALUES(?, ?, ?)");
		$q->execute([
			$fullName,
			$email,
			$message
		]);
	}
}
?>