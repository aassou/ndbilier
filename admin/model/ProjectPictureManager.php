<?php
class ProjectPictureManager{

	//attributes
	private $_db;

	//le constructeur
    public function __construct($db){
        $this->_db = $db;
    }

	//BAISC CRUD OPERATIONS
	public function add(ProjectPicture $projectPicture){
    	$query = $this->_db->prepare(' INSERT INTO t_projectPicture (
		name, url, description, idProject, idCompany, created, createdBy)
		VALUES (:name, :url, :description, :idProject, :idCompany, :created, :createdBy)')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':name', $projectPicture->name());
		$query->bindValue(':url', $projectPicture->url());
		$query->bindValue(':description', $projectPicture->description());
		$query->bindValue(':idProject', $projectPicture->idProject());
		$query->bindValue(':idCompany', $projectPicture->idCompany());
		$query->bindValue(':created', $projectPicture->created());
		$query->bindValue(':createdBy', $projectPicture->createdBy());
		$query->execute();
		$query->closeCursor();
	}

	public function update(ProjectPicture $projectPicture){
    	$query = $this->_db->prepare(' UPDATE t_projectPicture SET 
		name=:name, url=:url, description=:description, idProject=:idProject, idCompany=:idCompany, updated=:updated, updatedBy=:updatedBy
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $projectPicture->id());
		$query->bindValue(':name', $projectPicture->name());
		$query->bindValue(':url', $projectPicture->url());
		$query->bindValue(':description', $projectPicture->description());
		$query->bindValue(':idProject', $projectPicture->idProject());
		$query->bindValue(':idCompany', $projectPicture->idCompany());
		$query->bindValue(':updated', $projectPicture->updated());
		$query->bindValue(':updatedBy', $projectPicture->updatedBy());
		$query->execute();
		$query->closeCursor();
	}

	public function delete($id){
    	$query = $this->_db->prepare(' DELETE FROM t_projectPicture
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();
		$query->closeCursor();
	}

	public function getProjectPictureById($id){
    	$query = $this->_db->prepare(' SELECT * FROM t_projectPicture
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();		
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$query->closeCursor();
		return new ProjectPicture($data);
	}

	public function getProjectPictures(){
		$projectPictures = array();
		$query = $this->_db->query('SELECT * FROM t_projectPicture
		ORDER BY id DESC');
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$projectPictures[] = new ProjectPicture($data);
		}
		$query->closeCursor();
		return $projectPictures;
	}

	public function getProjectPicturesByLimits($begin, $end){
		$projectPictures = array();
		$query = $this->_db->query('SELECT * FROM t_projectPicture
		ORDER BY id DESC LIMIT '.$begin.', '.$end);
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$projectPictures[] = new ProjectPicture($data);
		}
		$query->closeCursor();
		return $projectPictures;
	}

	public function getLastId(){
    	$query = $this->_db->query(' SELECT id AS last_id FROM t_projectPicture
		ORDER BY id DESC LIMIT 0, 1');
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$id = $data['last_id'];
		return $id;
	}
    
    ////////////////////////////////////////////////////////////////////////////////////////////
    
    public function getFirstProjectPictureByIdProject($idProject){
        $query = $this->_db->prepare('SELECT * FROM t_projectPicture
        WHERE idProject=:idProject ORDER BY id DESC LIMIT 0, 1')
        or die (print_r($this->_db->errorInfo()));
        $query->bindValue(':idProject', $idProject);
        $query->execute();      
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return new ProjectPicture($data);
    }

    public function getProjectPicturesByIdProject($idProject){
        $projectPictures = array();
        $query = $this->_db->prepare('SELECT * FROM t_projectPicture
        WHERE idProject=:idProject ORDER BY id DESC');
        $query->bindValue(':idProject', $idProject);
        $query->execute();      
        while($data = $query->fetch(PDO::FETCH_ASSOC)){
            $projectPictures[] = new ProjectPicture($data);
        }
        $query->closeCursor();
        return $projectPictures;
    }
}