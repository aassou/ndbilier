<?php
class CompanyManager{

	//attributes
	private $_db;

	//le constructeur
    public function __construct($db){
        $this->_db = $db;
    }

	//BAISC CRUD OPERATIONS
	public function add(Company $company){
    	$query = $this->_db->prepare(' INSERT INTO t_company (
		name, ceo, adress, birthDate, description, telefon1, telefon2, email, logo, created, createdBy)
		VALUES (:name, :ceo, :adress, :description, :birthDate, :telefon1, :telefon2, :email, :logo, :created, :createdBy)')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':name', $company->name());
		$query->bindValue(':ceo', $company->ceo());
		$query->bindValue(':adress', $company->adress());
		$query->bindValue(':birthDate', $company->birthDate());
        $query->bindValue(':description', $company->description());
		$query->bindValue(':telefon1', $company->telefon1());
		$query->bindValue(':telefon2', $company->telefon2());
		$query->bindValue(':email', $company->email());
		$query->bindValue(':logo', $company->logo());
		$query->bindValue(':created', $company->created());
		$query->bindValue(':createdBy', $company->createdBy());
		$query->execute();
		$query->closeCursor();
	}

	public function update(Company $company){
    	$query = $this->_db->prepare(' UPDATE t_company SET 
		name=:name, ceo=:ceo, adress=:adress, birthDate=:birthDate, description=:description, telefon1=:telefon1, telefon2=:telefon2, email=:email, logo=:logo, updated=:updated, updatedBy=:updatedBy
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $company->id());
		$query->bindValue(':name', $company->name());
		$query->bindValue(':ceo', $company->ceo());
		$query->bindValue(':adress', $company->adress());
		$query->bindValue(':birthDate', $company->birthDate());
        $query->bindValue(':description', $company->description());
		$query->bindValue(':telefon1', $company->telefon1());
		$query->bindValue(':telefon2', $company->telefon2());
		$query->bindValue(':email', $company->email());
		$query->bindValue(':logo', $company->logo());
		$query->bindValue(':updated', $company->updated());
		$query->bindValue(':updatedBy', $company->updatedBy());
		$query->execute();
		$query->closeCursor();
	}

	public function delete($id){
    	$query = $this->_db->prepare(' DELETE FROM t_company
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();
		$query->closeCursor();
	}

	public function getCompanyById($id){
    	$query = $this->_db->prepare(' SELECT * FROM t_company
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();		
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$query->closeCursor();
		return new Company($data);
	}

	public function getCompanys(){
		$companys = array();
		$query = $this->_db->query('SELECT * FROM t_company
		ORDER BY id DESC');
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$companys[] = new Company($data);
		}
		$query->closeCursor();
		return $companys;
	}

	public function getCompanysByLimits($begin, $end){
		$companys = array();
		$query = $this->_db->query('SELECT * FROM t_company
		ORDER BY id DESC LIMIT '.$begin.', '.$end);
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$companys[] = new Company($data);
		}
		$query->closeCursor();
		return $companys;
	}

	public function getLastId(){
    	$query = $this->_db->query(' SELECT id AS last_id FROM t_company
		ORDER BY id DESC LIMIT 0, 1');
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$id = $data['last_id'];
		return $id;
	}

}