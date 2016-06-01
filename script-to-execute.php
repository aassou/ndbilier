<?php
    //classes loading begin
    function classLoad ($myClass) {
        if(file_exists('admin/model/'.$myClass.'.php')){
            include('admin/model/'.$myClass.'.php');
        }
        elseif(file_exists('admin/controller/'.$myClass.'.php')){
            include('admin/controller/'.$myClass.'.php');
        }
    }
    spl_autoload_register("classLoad");
    //classes loading end
    //session_start();
    include('include/config.php');
    //class managers
    $companyManager = new CompanyManager($pdo);
    $projectManager = new ProjectManager($pdo);
    //execute
    $projectManager->updateNameArabic(1, "غزة");
    $projectManager->updateNameArabic(2, "رفح");
    $projectManager->updateNameArabic(3, "خطابي");
    $projectManager->updateNameArabic(4, "قمر");
    $projectManager->updateNameArabic(5, "ريهام");
    $projectManager->updateNameArabic(6, "أحلام");
    $projectManager->updateNameArabic(7, "ساجد");
    $projectManager->updateNameArabic(8, "غفران");
    $projectManager->updateNameArabic(9, "بدر");
    $projectManager->updateNameArabic(10, "الأقصى");
    $projectManager->updateNameArabic(11, "النهضة 11");
    $projectManager->updateNameArabic(12, "النهضة 12");
    $projectManager->updateNameArabic(13, "النهضة 13");
    $projectManager->updateNameArabic(14, "دوليز");
    $projectManager->updateNameArabic(15, "مارشيكا");
    $projectManager->updateNameArabic(16, "الفيض");
    $projectManager->updateNameArabic(17, "غفران");
    $projectManager->updateNameArabic(18, "فيلا لينا");
    $projectManager->updateNameArabic(19, "جوهرة");
    $projectManager->updateNameArabic(20, "الخير");
    $projectManager->updateNameArabic(21, "البركة");
    $projectManager->updateNameArabic(22, "السنة");
    $projectManager->updateNameArabic(23, "البستان");
    $projectManager->updateNameArabic(24, "الرسالة 1");
    $projectManager->updateNameArabic(25, "الرسالة 2");
    $projectManager->updateNameArabic(26, "نسيم 1");
    $projectManager->updateNameArabic(27, "نسيم 2");
    $projectManager->updateNameArabic(28, "نسمة");
    $projectManager->updateNameArabic(29, "المسجد الكبير");
    echo "Well done !";
