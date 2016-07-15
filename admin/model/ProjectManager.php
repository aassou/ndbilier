<?php
class ProjectManager{

	//attributes
	private $_db;

	//le constructeur
    public function __construct($db){
        $this->_db = $db;
    }

	//BAISC CRUD OPERATIONS
	public function add(Project $project){
    	$query = $this->_db->prepare(' INSERT INTO t_project (
		name, nameArabic, titre, adress, latlong, size, birthDate, description, descriptionArabic, status, construction, finition, idCompany, created, createdBy)
		VALUES (:name, :nameArabic, :titre, :adress, :latlong, :size, :birthDate, :description, :descriptionArabic, :status, :construction, :finition, :idCompany, :created, :createdBy)')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':name', $project->name());
        $query->bindValue(':nameArabic', $project->nameArabic());
		$query->bindValue(':titre', $project->titre());
		$query->bindValue(':adress', $project->adress());
		$query->bindValue(':size', $project->size());
        $query->bindValue(':latlong', $project->latlong());
		$query->bindValue(':birthDate', $project->birthDate());
		$query->bindValue(':description', $project->description());
        $query->bindValue(':descriptionArabic', $project->descriptionArabic());
		$query->bindValue(':status', $project->status());
		$query->bindValue(':construction', $project->construction());
		$query->bindValue(':finition', $project->finition());
		$query->bindValue(':idCompany', $project->idCompany());
		$query->bindValue(':created', $project->created());
		$query->bindValue(':createdBy', $project->createdBy());
		$query->execute();
		$query->closeCursor();
	}

	public function update(Project $project){
    	$query = $this->_db->prepare(' UPDATE t_project SET 
		name=:name, nameArabic=:nameArabic, titre=:titre, adress=:adress, size=:size, birthDate=:birthDate, 
		description=:description, descriptionArabic=:descriptionArabic, status=:status, construction=:construction, 
		finition=:finition, idCompany=:idCompany, updated=:updated, updatedBy=:updatedBy
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $project->id());
		$query->bindValue(':name', $project->name());
        $query->bindValue(':nameArabic', $project->nameArabic());
		$query->bindValue(':titre', $project->titre());
		$query->bindValue(':adress', $project->adress());
		$query->bindValue(':size', $project->size());
		$query->bindValue(':birthDate', $project->birthDate());
		$query->bindValue(':description', $project->description());
        $query->bindValue(':descriptionArabic', $project->descriptionArabic());
		$query->bindValue(':status', $project->status());
		$query->bindValue(':construction', $project->construction());
		$query->bindValue(':finition', $project->finition());
		$query->bindValue(':idCompany', $project->idCompany());
		$query->bindValue(':updated', $project->updated());
		$query->bindValue(':updatedBy', $project->updatedBy());
		$query->execute();
		$query->closeCursor();
	}

    public function updateNameArabic($idProject, $nameArabic){
        $query = $this->_db->prepare(
        'UPDATE t_project SET 
        nameArabic=:nameArabic
        WHERE id=:id')
        or die (print_r($this->_db->errorInfo()));
        $query->bindValue(':id', $idProject);
        $query->bindValue(':nameArabic', $nameArabic);
        $query->execute();
        $query->closeCursor();
    }
    
    public function updateDescriptionArabic($idProject, $descriptionArabic){
        $query = $this->_db->prepare(
        'UPDATE t_project SET 
        descriptionArabic=:descriptionArabic
        WHERE id=:id')
        or die (print_r($this->_db->errorInfo()));
        $query->bindValue(':id', $idProject);
        $query->bindValue(':descriptionArabic', $descriptionArabic);
        $query->execute();
        $query->closeCursor();
    }

	public function delete($id){
    	$query = $this->_db->prepare(' DELETE FROM t_project
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();
		$query->closeCursor();
	}

	public function getProjectById($id){
    	$query = $this->_db->prepare(' SELECT * FROM t_project
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();		
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$query->closeCursor();
		return new Project($data);
	}

	public function getProjects(){
		$projects = array();
		$query = $this->_db->query('SELECT * FROM t_project
		ORDER BY id DESC');
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$projects[] = new Project($data);
		}
		$query->closeCursor();
		return $projects;
	}
    
    public function getProjectsByIdCompany($idCompany){
        $projects = array();
        $query = $this->_db->prepare('SELECT * FROM t_project
        WHERE idCompany=:idCompany
        ORDER BY id DESC');
        $query->bindValue('idCompany', $idCompany);
        $query->execute();
        while($data = $query->fetch(PDO::FETCH_ASSOC)){
            $projects[] = new Project($data);
        }
        $query->closeCursor();
        return $projects;
    }

	public function getProjectsByLimits($begin, $end){
		$projects = array();
		$query = $this->_db->query('SELECT * FROM t_project
		ORDER BY id DESC LIMIT '.$begin.', '.$end);
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$projects[] = new Project($data);
		}
		$query->closeCursor();
		return $projects;
	}

	public function getLastId(){
    	$query = $this->_db->query(' SELECT id AS last_id FROM t_project
		ORDER BY id DESC LIMIT 0, 1');
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$id = $data['last_id'];
		return $id;
	}

}