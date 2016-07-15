<?php

    //classes loading begin
    function classLoad ($myClass) {
        if(file_exists('../model/'.$myClass.'.php')){
            include('../model/'.$myClass.'.php');
        }
        elseif(file_exists('../controller/'.$myClass.'.php')){
            include('../controller/'.$myClass.'.php');
        }
    }
    spl_autoload_register("classLoad"); 
    include('../config.php');  
    include('../lib/image-processing.php');
    //classes loading end
    session_start();
    
    //post input processing
    $action = htmlentities($_POST['action']);
    //This var contains result message of CRUD action
    $actionMessage = "";
    $typeMessage = "";

    //Component Class Manager

    $propertyManager = new PropertyManager($pdo);
	//Action Add Processing Begin
    if($action == "add"){
        if( !empty($_POST['nameAR']) ){
			$nameAR = htmlentities($_POST['nameAR']);
			$nameFR = htmlentities($_POST['nameFR']);
			$nameES = htmlentities($_POST['nameES']);
			$nameDE = htmlentities($_POST['nameDE']);
			$nameNL = htmlentities($_POST['nameNL']);
			$descriptionAR = htmlentities($_POST['descriptionAR']);
			$descriptionFR = htmlentities($_POST['descriptionFR']);
			$descriptionES = htmlentities($_POST['descriptionES']);
			$descriptionDE = htmlentities($_POST['descriptionDE']);
			$descriptionNL = htmlentities($_POST['descriptionNL']);
			$price = htmlentities($_POST['price']);
			$address = htmlentities($_POST['address']);
			$phone = htmlentities($_POST['phone']);
			$type = htmlentities($_POST['type']);
			$img1 = htmlentities($_POST['img1']);
			$img2 = htmlentities($_POST['img2']);
			$img3 = htmlentities($_POST['img3']);
			$img4 = htmlentities($_POST['img4']);
			$createdBy = $_SESSION['userMerlaTrav']->login();
            $created = date('Y-m-d h:i:s');
            //create object
            $property = new Property(array(
				'nameAR' => $nameAR,
				'nameFR' => $nameFR,
				'nameES' => $nameES,
				'nameDE' => $nameDE,
				'nameNL' => $nameNL,
				'descriptionAR' => $descriptionAR,
				'descriptionFR' => $descriptionFR,
				'descriptionES' => $descriptionES,
				'descriptionDE' => $descriptionDE,
				'descriptionNL' => $descriptionNL,
				'price' => $price,
				'address' => $address,
				'phone' => $phone,
				'type' => $type,
				'img1' => $img1,
				'img2' => $img2,
				'img3' => $img3,
				'img4' => $img4,
				'created' => $created,
            	'createdBy' => $createdBy
			));
            //add it to db
            $propertyManager->add($property);
            $actionMessage = "Opération Valide : Property Ajouté(e) avec succès.";  
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Ajout property : Vous devez remplir le champ 'nameAR'.";
            $typeMessage = "error";
        }
    }
    //Action Add Processing End
    //Action Update Processing Begin
    else if($action == "update"){
        $idProperty = htmlentities($_POST['idProperty']);
        if(!empty($_POST['nameAR'])){
			$nameAR = htmlentities($_POST['nameAR']);
			$nameFR = htmlentities($_POST['nameFR']);
			$nameES = htmlentities($_POST['nameES']);
			$nameDE = htmlentities($_POST['nameDE']);
			$nameNL = htmlentities($_POST['nameNL']);
			$descriptionAR = htmlentities($_POST['descriptionAR']);
			$descriptionFR = htmlentities($_POST['descriptionFR']);
			$descriptionES = htmlentities($_POST['descriptionES']);
			$descriptionDE = htmlentities($_POST['descriptionDE']);
			$descriptionNL = htmlentities($_POST['descriptionNL']);
			$price = htmlentities($_POST['price']);
			$address = htmlentities($_POST['address']);
			$phone = htmlentities($_POST['phone']);
			$type = htmlentities($_POST['type']);
			$img1 = htmlentities($_POST['img1']);
			$img2 = htmlentities($_POST['img2']);
			$img3 = htmlentities($_POST['img3']);
			$img4 = htmlentities($_POST['img4']);
			$updatedBy = $_SESSION['userMerlaTrav']->login();
            $updated = date('Y-m-d h:i:s');
            $property = new Property(array(
				'id' => $idProperty,
				'nameAR' => $nameAR,
				'nameFR' => $nameFR,
				'nameES' => $nameES,
				'nameDE' => $nameDE,
				'nameNL' => $nameNL,
				'descriptionAR' => $descriptionAR,
				'descriptionFR' => $descriptionFR,
				'descriptionES' => $descriptionES,
				'descriptionDE' => $descriptionDE,
				'descriptionNL' => $descriptionNL,
				'price' => $price,
				'address' => $address,
				'phone' => $phone,
				'type' => $type,
				'img1' => $img1,
				'img2' => $img2,
				'img3' => $img3,
				'img4' => $img4,
				'updated' => $updated,
            	'updatedBy' => $updatedBy
			));
            $propertyManager->update($property);
            $actionMessage = "Opération Valide : Property Modifié(e) avec succès.";
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Modification Property : Vous devez remplir le champ 'nameAR'.";
            $typeMessage = "error";
        }
    }
    //Action Update Processing End
    //Action Delete Processing Begin
    else if($action == "delete"){
        $idProperty = htmlentities($_POST['idProperty']);
        $propertyManager->delete($idProperty);
        $actionMessage = "Opération Valide : Property supprimé(e) avec succès.";
        $typeMessage = "success";
    }
    //Action Delete Processing End
    $_SESSION['property-action-message'] = $actionMessage;
    $_SESSION['property-type-message'] = $typeMessage;
    header('Location:../file-name-please.php');

