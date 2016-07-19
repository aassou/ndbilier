<?php
class PropertyManager{

	//attributes
	private $_db;

	//le constructeur
    public function __construct($db){
        $this->_db = $db;
    }

	//BAISC CRUD OPERATIONS
	public function add(Property $property){
    	$query = $this->_db->prepare(' INSERT INTO t_property (
		category, nameAR, nameFR, nameES, nameDE, nameNL, descriptionAR, descriptionFR, descriptionES, descriptionDE, descriptionNL, price, address, latlong, phone, type, img1, img2, img3, img4, created, createdBy)
		VALUES (:category, :nameAR, :nameFR, :nameES, :nameDE, :nameNL, :descriptionAR, :descriptionFR, :descriptionES, :descriptionDE, :descriptionNL, :price, :address, :latlong; :phone, :type, :img1, :img2, :img3, :img4, :created, :createdBy)')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':category', $property->category());
		$query->bindValue(':nameAR', $property->nameAR());
		$query->bindValue(':nameFR', $property->nameFR());
		$query->bindValue(':nameES', $property->nameES());
		$query->bindValue(':nameDE', $property->nameDE());
		$query->bindValue(':nameNL', $property->nameNL());
		$query->bindValue(':descriptionAR', $property->descriptionAR());
		$query->bindValue(':descriptionFR', $property->descriptionFR());
		$query->bindValue(':descriptionES', $property->descriptionES());
		$query->bindValue(':descriptionDE', $property->descriptionDE());
		$query->bindValue(':descriptionNL', $property->descriptionNL());
		$query->bindValue(':price', $property->price());
		$query->bindValue(':address', $property->address());
        $query->bindValue(':latlong', $property->latlong());
		$query->bindValue(':phone', $property->phone());
		$query->bindValue(':type', $property->type());
		$query->bindValue(':img1', $property->img1());
		$query->bindValue(':img2', $property->img2());
		$query->bindValue(':img3', $property->img3());
		$query->bindValue(':img4', $property->img4());
		$query->bindValue(':created', $property->created());
		$query->bindValue(':createdBy', $property->createdBy());
		$query->execute();
		$query->closeCursor();
	}

	public function update(Property $property){
    	$query = $this->_db->prepare(' UPDATE t_property SET 
		nameAR=:nameAR, nameFR=:nameFR, nameES=:nameES, nameDE=:nameDE, nameNL=:nameNL, descriptionAR=:descriptionAR, descriptionFR=:descriptionFR, descriptionES=:descriptionES, descriptionDE=:descriptionDE, descriptionNL=:descriptionNL, price=:price, address=:address, phone=:phone, type=:type, img1=:img1, img2=:img2, img3=:img3, img4=:img4, updated=:updated, updatedBy=:updatedBy
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $property->id());
		$query->bindValue(':nameAR', $property->nameAR());
		$query->bindValue(':nameFR', $property->nameFR());
		$query->bindValue(':nameES', $property->nameES());
		$query->bindValue(':nameDE', $property->nameDE());
		$query->bindValue(':nameNL', $property->nameNL());
		$query->bindValue(':descriptionAR', $property->descriptionAR());
		$query->bindValue(':descriptionFR', $property->descriptionFR());
		$query->bindValue(':descriptionES', $property->descriptionES());
		$query->bindValue(':descriptionDE', $property->descriptionDE());
		$query->bindValue(':descriptionNL', $property->descriptionNL());
		$query->bindValue(':price', $property->price());
		$query->bindValue(':address', $property->address());
		$query->bindValue(':phone', $property->phone());
		$query->bindValue(':type', $property->type());
		$query->bindValue(':img1', $property->img1());
		$query->bindValue(':img2', $property->img2());
		$query->bindValue(':img3', $property->img3());
		$query->bindValue(':img4', $property->img4());
		$query->bindValue(':updated', $property->updated());
		$query->bindValue(':updatedBy', $property->updatedBy());
		$query->execute();
		$query->closeCursor();
	}

	public function delete($id){
    	$query = $this->_db->prepare(' DELETE FROM t_property
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();
		$query->closeCursor();
	}

	public function getPropertyById($id){
    	$query = $this->_db->prepare(' SELECT * FROM t_property
		WHERE id=:id')
		or die (print_r($this->_db->errorInfo()));
		$query->bindValue(':id', $id);
		$query->execute();		
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$query->closeCursor();
		return new Property($data);
	}

	public function getPropertys(){
		$propertys = array();
		$query = $this->_db->query('SELECT * FROM t_property
		ORDER BY id DESC');
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$propertys[] = new Property($data);
		}
		$query->closeCursor();
		return $propertys;
	}
    
    //IF type RECORD is set to 1 it means the property is on sale
    public function getPropertyForSale(){
        $propertys = array();
        $query = $this->_db->query('SELECT * FROM t_property WHERE type=1 ORDER BY id DESC');
        while($data = $query->fetch(PDO::FETCH_ASSOC)){
            $propertys[] = new Property($data);
        }
        $query->closeCursor();
        return $propertys;
    }
    
    //IF type RECORD is set to 2 it means the property is for rent
    public function getPropertyForRent(){
        $propertys = array();
        $query = $this->_db->query('SELECT * FROM t_property WHERE type=2 ORDER BY id DESC');
        while($data = $query->fetch(PDO::FETCH_ASSOC)){
            $propertys[] = new Property($data);
        }
        $query->closeCursor();
        return $propertys;
    }

	public function getPropertysByLimits($begin, $end){
		$propertys = array();
		$query = $this->_db->query('SELECT * FROM t_property
		ORDER BY id DESC LIMIT '.$begin.', '.$end);
		while($data = $query->fetch(PDO::FETCH_ASSOC)){
			$propertys[] = new Property($data);
		}
		$query->closeCursor();
		return $propertys;
	}

	public function getLastId(){
    	$query = $this->_db->query(' SELECT id AS last_id FROM t_property
		ORDER BY id DESC LIMIT 0, 1');
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$id = $data['last_id'];
		return $id;
	}

}