<?php
class Project{

	//attributes
	private $_id;
	private $_name;
    private $_nameArabic;
	private $_titre;
	private $_adress;
	private $_size;
    private $_latlong;
	private $_birthDate;
	private $_description;
    private $_descriptionArabic;
    private $_descriptionNL;
    private $_descriptionDE;
    private $_descriptionES;
	private $_status;
	private $_construction;
	private $_finition;
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

    public function setNameArabic($nameArabic){
        $this->_nameArabic = $nameArabic;
    }

	public function setTitre($titre){
		$this->_titre = $titre;
   	}

	public function setAdress($adress){
		$this->_adress = $adress;
   	}

	public function setSize($size){
		$this->_size = $size;
   	}
    
    public function setLatlong($latlong){
        $this->_latlong = $latlong;
    }

	public function setBirthDate($birthDate){
		$this->_birthDate = $birthDate;
   	}

	public function setDescription($description){
		$this->_description = $description;
   	}
    
    public function setDescriptionArabic($descriptionArabic){
        $this->_descriptionArabic = $descriptionArabic;
    }
    
    public function setDescriptionDE($descriptionDE){
        $this->_descriptionDE = $descriptionDE;
    }
    
    public function setDescriptionNL($descriptionNL){
        $this->_descriptionNL = $descriptionNL;
    }
    
    public function setDescriptionES($descriptionES){
        $this->_descriptionES = $descriptionES;
    }

	public function setStatus($status){
		$this->_status = $status;
   	}

	public function setConstruction($construction){
		$this->_construction = $construction;
   	}

	public function setFinition($finition){
		$this->_finition = $finition;
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
    
    public function nameArabic(){
        return $this->_nameArabic;
    }

	public function titre(){
		return $this->_titre;
   	}

	public function adress(){
		return $this->_adress;
   	}

	public function size(){
		return $this->_size;
   	}
    
    public function latlong(){
        return $this->_latlong;
    }

	public function birthDate(){
		return $this->_birthDate;
   	}

	public function description(){
		return $this->_description;
   	}
    
    public function descriptionArabic(){
        return $this->_descriptionArabic;
    }
    
    public function descriptionDE(){
        return $this->_descriptionDE;
    }
    
    public function descriptionNL(){
        return $this->_descriptionNL;
    }
    
    public function descriptionES(){
        return $this->_descriptionES;
    }

	public function status(){
		return $this->_status;
   	}

	public function construction(){
		return $this->_construction;
   	}

	public function finition(){
		return $this->_finition;
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