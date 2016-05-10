<?php

namespace Manager;


class MiniURLManager extends \W\Manager\Manager
{
	
	
	public function MiniUrl($url){
	
		$miniUrl = $this->findByUrl($url);
			if($miniUrl){
				return $miniUrl;
			}
			$code = \W\Security\StringUtils::randomString(6);
			$codeMini = $this->findByCode($code);
			while ($this->findByCode($code)) {
				$code = \W\Security\StringUtils::randomString(6);
			}
			return $this->insert(['url'=>$url, 'short_url' => $code, 'date_creation' => date('Y-m-d H:i:s', time()), 'nb_vue'=> 0 ]);
	}
	
	public function findByCode($code)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE short_url = :code";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":code", $code);
		$sth->execute();

		return $sth->fetch();
	}
	
	public function findByUrl($url)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE url = :url";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":url", $url);
		$sth->execute();

		return $sth->fetch();
	}
	
	public function liste()
	{
		$liste = $this->findAll($orderBy = "1", $orderDir = "ASC", $limit = null, $offset = null);
		return $liste;
		
		
	}
				
	
		
	
	
	
	
	
	
}