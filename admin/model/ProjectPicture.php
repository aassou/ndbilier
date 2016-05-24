<?php
class ProjectPicture{

	//attributes
	private $_id;
	private $_name;
	private $_url;
	private $_description;
	private $_idProject;
	private $_idCompany;
	private $_created;
	private $_createdBy;
	private $_updated;
	private $_updatedBy;

	//le constructeur
    public function __construct($data){
        $this->hydrate($data);
    }
    
    //la focntion hydrate sert à attribuer les valeurs en utilisant les setters d\'une façon dynamique!
    public function hydrate($data){
        foreach ($data as $key => $value){
            $method = 'set'.ucfirst($key);
            
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

	//setters
	public function setId($id){
    	$this->_id = $id;
    }
	public function setName($name){
		$this->_name = $name;
   	}

	public function setUrl($url){
		$this->_url = $url;
   	}

	public function setDescription($description){
		$this->_description = $description;
   	}

	public function setIdProject($idProject){
		$this->_idProject = $idProject;
   	}

	public function setIdCompany($idCompany){
		$this->_idCompany = $idCompany;
   	}

	public function setCreated($created){
        $this->_created = $created;
    }

	public function setCreatedBy($createdBy){
        $this->_createdBy = $createdBy;
    }

	public function setUpdated($updated){
        $this->_updated = $updated;
    }

	public function setUpdatedBy($updatedBy){
        $this->_updatedBy = $updatedBy;
    }

	//getters
	public function id(){
    	return $this->_id;
    }
	public function name(){
		return $this->_name;
   	}

	public function url(){
		return $this->_url;
   	}

	public function description(){
		return $this->_description;
   	}

	public function idProject(){
		return $this->_idProject;
   	}

	public function idCompany(){
		return $this->_idCompany;
   	}

	public function created(){
        return $this->_created;
    }

	public function createdBy(){
        return $this->_createdBy;
    }

	public function updated(){
        return $this->_updated;
    }

	public function updatedBy(){
        return $this->_updatedBy;
    }

}