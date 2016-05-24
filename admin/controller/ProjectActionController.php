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

    $projectManager = new ProjectManager($pdo);
	//Action Add Processing Begin
    	if($action == "add"){
        if( !empty($_POST['name']) ){
			$name = htmlentities($_POST['name']);
			$titre = htmlentities($_POST['titre']);
			$adress = htmlentities($_POST['adress']);
			$size = htmlentities($_POST['size']);
			$birthDate = htmlentities($_POST['birthDate']);
			$description = htmlentities($_POST['description']);
			$status = htmlentities($_POST['status']);
			$construction = htmlentities($_POST['construction']);
			$finition = htmlentities($_POST['finition']);
			$idCompany = htmlentities($_POST['idCompany']);
			$createdBy = $_SESSION['userMerlaTrav']->login();
            $created = date('Y-m-d h:i:s');
            //create object
            $project = new Project(array(
				'name' => $name,
				'titre' => $titre,
				'adress' => $adress,
				'size' => $size,
				'birthDate' => $birthDate,
				'description' => $description,
				'status' => $status,
				'construction' => $construction,
				'finition' => $finition,
				'idCompany' => $idCompany,
				'created' => $created,
            	'createdBy' => $createdBy
			));
            //add it to db
            $projectManager->add($project);
            $actionMessage = "Opération Valide : Project Ajouté(e) avec succès.";  
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Ajout project : Vous devez remplir le champ 'name'.";
            $typeMessage = "error";
        }
    }
    //Action Add Processing End
    //Action Update Processing Begin
    else if($action == "update"){
        $idProject = htmlentities($_POST['idProject']);
        if(!empty($_POST['name'])){
			$name = htmlentities($_POST['name']);
			$titre = htmlentities($_POST['titre']);
			$adress = htmlentities($_POST['adress']);
			$size = htmlentities($_POST['size']);
			$birthDate = htmlentities($_POST['birthDate']);
			$description = htmlentities($_POST['description']);
			$status = htmlentities($_POST['status']);
			$construction = htmlentities($_POST['construction']);
			$finition = htmlentities($_POST['finition']);
			$idCompany = htmlentities($_POST['idCompany']);
			$updatedBy = $_SESSION['userMerlaTrav']->login();
            $updated = date('Y-m-d h:i:s');
            			$project = new Project(array(
				'id' => $idProject,
				'name' => $name,
				'titre' => $titre,
				'adress' => $adress,
				'size' => $size,
				'birthDate' => $birthDate,
				'description' => $description,
				'status' => $status,
				'construction' => $construction,
				'finition' => $finition,
				'idCompany' => $idCompany,
				'updated' => $updated,
            	'updatedBy' => $updatedBy
			));
            $projectManager->update($project);
            $actionMessage = "Opération Valide : Project Modifié(e) avec succès.";
            $typeMessage = "success";
        }
        else{
            $actionMessage = "Erreur Modification Project : Vous devez remplir le champ 'name'.";
            $typeMessage = "error";
        }
    }
    //Action Update Processing End
    //Action Delete Processing Begin
    else if($action == "delete"){
        $idProject = htmlentities($_POST['idProject']);
        $projectManager->delete($idProject);
        $actionMessage = "Opération Valide : Project supprimé(e) avec succès.";
        $typeMessage = "success";
    }
    //Action Delete Processing End
    $_SESSION['project-action-message'] = $actionMessage;
    $_SESSION['project-type-message'] = $typeMessage;
    header('Location:../file-name-please.php');

