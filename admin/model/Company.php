<?php
class Company{

	//attributes
	private $_id;
	private $_name;
	private $_ceo;
	private $_adress;
	private $_birthDate;
    private $_description;
	private $_telefon1;
	private $_telefon2;
	private $_email;
	private $_logo;
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

	public function setCeo($ceo){
		$this->_ceo = $ceo;
   	}

	public function setAdress($adress){
		$this->_adress = $adress;
   	}

	public function setBirthDate($birthDate){
		$this->_birthDate = $birthDate;
   	}
    
    public function setDescription($description){
        $this->_description = $description;
    }

	public function setTelefon1($telefon1){
		$this->_telefon1 = $telefon1;
   	}

	public function setTelefon2($telefon2){
		$this->_telefon2 = $telefon2;
   	}

	public function setEmail($email){
		$this->_email = $email;
   	}

	public function setLogo($logo){
		$this->_logo = $logo;
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

	public function ceo(){
		return $this->_ceo;
   	}

	public function adress(){
		return $this->_adress;
   	}

	public function birthDate(){
		return $this->_birthDate;
   	}
    
    public function description(){
        return $this->_description;
    }

	public function telefon1(){
		return $this->_telefon1;
   	}

	public function telefon2(){
		return $this->_telefon2;
   	}

	public function email(){
		return $this->_email;
   	}

	public function logo(){
		return $this->_logo;
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