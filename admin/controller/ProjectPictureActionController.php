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

    $projectPictureManager = new ProjectPictureManager($pdo);
	//Action Add Processing Begin
    	if($action == "add"){
        if( !empty($_POST['name']) ){
			$name = htmlentities($_POST['name']);
			$url = htmlentities($_POST['url']);
			$description = htmlentities($_POST['description']);
			$idProject = htmlentities($_POST['idProject']);
			$idCompany = htmlentities($_POST['idCompany']);
			$createdBy = $_SESSION['userMerlaTrav']->login();
            $created = date('Y-m-d h:i:s');
            //create object
            $projectPicture = new ProjectPicture(array(
				'name' => $name,
				'url' => $url,
				'description' => $description,
				'idProject' => $idProject,
				'idCompany' => $idCompany,
				'created' => $created,
            	'createdBy' => $createdBy
			));
            //add it to db
            $projectPictureManager->add($projectPicture);
            $actionMessage = "Opération Valide : ProjectPicture Ajouté(e) avec succès.";  
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Ajout projectPicture : Vous devez remplir le champ 'name'.";
            $typeMessage = "error";
        }
    }
    //Action Add Processing End
    //Action Update Processing Begin
    else if($action == "update"){
        $idProjectPicture = htmlentities($_POST['idProjectPicture']);
        if(!empty($_POST['name'])){
			$name = htmlentities($_POST['name']);
			$url = htmlentities($_POST['url']);
			$description = htmlentities($_POST['description']);
			$idProject = htmlentities($_POST['idProject']);
			$idCompany = htmlentities($_POST['idCompany']);
			$updatedBy = $_SESSION['userMerlaTrav']->login();
            $updated = date('Y-m-d h:i:s');
            			$projectPicture = new ProjectPicture(array(
				'id' => $idProjectPicture,
				'name' => $name,
				'url' => $url,
				'description' => $description,
				'idProject' => $idProject,
				'idCompany' => $idCompany,
				'updated' => $updated,
            	'updatedBy' => $updatedBy
			));
            $projectPictureManager->update($projectPicture);
            $actionMessage = "Opération Valide : ProjectPicture Modifié(e) avec succès.";
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Modification ProjectPicture : Vous devez remplir le champ 'name'.";
            $typeMessage = "error";
        }
    }
    //Action Update Processing End
    //Action Delete Processing Begin
    else if($action == "delete"){
        $idProjectPicture = htmlentities($_POST['idProjectPicture']);
        $projectPictureManager->delete($idProjectPicture);
        $actionMessage = "Opération Valide : ProjectPicture supprimé(e) avec succès.";
        $typeMessage = "success";
    }
    //Action Delete Processing End
    $_SESSION['projectPicture-action-message'] = $actionMessage;
    $_SESSION['projectPicture-type-message'] = $typeMessage;
    header('Location:../file-name-please.php');

