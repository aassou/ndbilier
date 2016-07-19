<?php
class Property{

	//attributes
	private $_id;
    private $_category;
	private $_nameAR;
	private $_nameFR;
	private $_nameES;
	private $_nameDE;
	private $_nameNL;
	private $_descriptionAR;
	private $_descriptionFR;
	private $_descriptionES;
	private $_descriptionDE;
	private $_descriptionNL;
	private $_price;
	private $_address;
    private $_latlong;
	private $_phone;
	private $_type;
	private $_img1;
	private $_img2;
	private $_img3;
	private $_img4;
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
    
    public function setCategory($category){
        $this->_category = $category;
    }
    
	public function setNameAR($nameAR){
		$this->_nameAR = $nameAR;
   	}

	public function setNameFR($nameFR){
		$this->_nameFR = $nameFR;
   	}

	public function setNameES($nameES){
		$this->_nameES = $nameES;
   	}

	public function setNameDE($nameDE){
		$this->_nameDE = $nameDE;
   	}

	public function setNameNL($nameNL){
		$this->_nameNL = $nameNL;
   	}

	public function setDescriptionAR($descriptionAR){
		$this->_descriptionAR = $descriptionAR;
   	}

	public function setDescriptionFR($descriptionFR){
		$this->_descriptionFR = $descriptionFR;
   	}

	public function setDescriptionES($descriptionES){
		$this->_descriptionES = $descriptionES;
   	}

	public function setDescriptionDE($descriptionDE){
		$this->_descriptionDE = $descriptionDE;
   	}

	public function setDescriptionNL($descriptionNL){
		$this->_descriptionNL = $descriptionNL;
   	}

	public function setPrice($price){
		$this->_price = $price;
   	}

	public function setAddress($address){
		$this->_address = $address;
   	}
    
    public function setLatlong($latlong){
        $this->_latlong = $latlong;
    }

	public function setPhone($phone){
		$this->_phone = $phone;
   	}

	public function setType($type){
		$this->_type = $type;
   	}

	public function setImg1($img1){
		$this->_img1 = $img1;
   	}

	public function setImg2($img2){
		$this->_img2 = $img2;
   	}

	public function setImg3($img3){
		$this->_img3 = $img3;
   	}

	public function setImg4($img4){
		$this->_img4 = $img4;
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
    
    public function category(){
        return $this->_category;
    }
    
	public function nameAR(){
		return $this->_nameAR;
   	}

	public function nameFR(){
		return $this->_nameFR;
   	}

	public function nameES(){
		return $this->_nameES;
   	}

	public function nameDE(){
		return $this->_nameDE;
   	}

	public function nameNL(){
		return $this->_nameNL;
   	}

	public function descriptionAR(){
		return $this->_descriptionAR;
   	}

	public function descriptionFR(){
		return $this->_descriptionFR;
   	}

	public function descriptionES(){
		return $this->_descriptionES;
   	}

	public function descriptionDE(){
		return $this->_descriptionDE;
   	}

	public function descriptionNL(){
		return $this->_descriptionNL;
   	}

	public function price(){
		return $this->_price;
   	}

	public function address(){
		return $this->_address;
   	}
    
    public function latlong(){
        return $this->_latlong;
    }

	public function phone(){
		return $this->_phone;
   	}

	public function type(){
		return $this->_type;
   	}

	public function img1(){
		return $this->_img1;
   	}

	public function img2(){
		return $this->_img2;
   	}

	public function img3(){
		return $this->_img3;
   	}

	public function img4(){
		return $this->_img4;
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