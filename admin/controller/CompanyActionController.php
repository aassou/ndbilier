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
    include('../../include/config.php');  
    include('../../lib/image-processing.php');
    //classes loading end
    session_start();
    
    //post input processing
    $action = htmlentities($_POST['action']);
    //This var contains result message of CRUD action
    $actionMessage = "";
    $typeMessage = "";

    //Component Class Manager

    $companyManager = new CompanyManager($pdo);
	//Action Add Processing Begin
    if($action == "add"){
        if( !empty($_POST['name']) ){
			$name = htmlentities($_POST['name']);
			$ceo = htmlentities($_POST['ceo']);
			$adress = htmlentities($_POST['adress']);
			$birthDate = htmlentities($_POST['birthDate']);
            $description = htmlentities($_POST['description']);
			$telefon1 = htmlentities($_POST['telefon1']);
			$telefon2 = htmlentities($_POST['telefon2']);
			$email = htmlentities($_POST['email']);
			$logo = htmlentities($_POST['logo']);
			$createdBy = $_SESSION['userMerlaTrav']->login();
            $created = date('Y-m-d h:i:s');
            //create object
            $company = new Company(array(
				'name' => $name,
				'ceo' => $ceo,
				'adress' => $adress,
				'birthDate' => $birthDate,
				'description' => $description, 
				'telefon1' => $telefon1,
				'telefon2' => $telefon2,
				'email' => $email,
				'logo' => $logo,
				'created' => $created,
            	'createdBy' => $createdBy
			));
            //add it to db
            $companyManager->add($company);
            $actionMessage = "Opération Valide : Company Ajouté(e) avec succès.";  
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Ajout company : Vous devez remplir le champ 'name'.";
            $typeMessage = "error";
        }
    }
    //Action Add Processing End
    //Action Update Processing Begin
    else if($action == "update"){
        $idCompany = htmlentities($_POST['idCompany']);
        if(!empty($_POST['name'])){
			$name = htmlentities($_POST['name']);
			$ceo = htmlentities($_POST['ceo']);
			$adress = htmlentities($_POST['adress']);
			$birthDate = htmlentities($_POST['birthDate']);
            $description = htmlentities($_POST['description']);
			$telefon1 = htmlentities($_POST['telefon1']);
			$telefon2 = htmlentities($_POST['telefon2']);
			$email = htmlentities($_POST['email']);
			$logo = htmlentities($_POST['logo']);
			$updatedBy = $_SESSION['userMerlaTrav']->login();
            $updated = date('Y-m-d h:i:s');
            $company = new Company(array(
				'id' => $idCompany,
				'name' => $name,
				'ceo' => $ceo,
				'adress' => $adress,
				'birthDate' => $birthDate,
				'description' => $description, 
				'telefon1' => $telefon1,
				'telefon2' => $telefon2,
				'email' => $email,
				'logo' => $logo,
				'updated' => $updated,
            	'updatedBy' => $updatedBy
			));
            $companyManager->update($company);
            $actionMessage = "Opération Valide : Company Modifié(e) avec succès.";
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Modification Company : Vous devez remplir le champ 'name'.";
            $typeMessage = "error";
        }
    }
    //Action Update Processing End
    //Action Delete Processing Begin
    else if($action == "delete"){
        $idCompany = htmlentities($_POST['idCompany']);
        $companyManager->delete($idCompany);
        $actionMessage = "Opération Valide : Company supprimé(e) avec succès.";
        $typeMessage = "success";
    }
    //Action Delete Processing End
    $_SESSION['company-action-message'] = $actionMessage;
    $_SESSION['company-type-message'] = $typeMessage;
    header('Location:../file-name-please.php');

