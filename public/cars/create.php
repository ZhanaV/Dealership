<?php


require_once('../../private/initialize.php');

//HEndle form value send for new.php

if(is_post_request()){
    
     // Handle form values sent by new.php
    
    $model=$_POST['model'] ?? '';
    $year=$_POST['year'] ?? '';
    $color=$_POST['color'] ?? '';
    $vin_number=$_POST['vin_number'] ?? '';
    $miles=$_POST['miles'] ?? '';
    $accident=$_POST['accident'] ??'';
    
            
//    $sql = "INSERT INTO cars";
//    $sql .="(model, year, color, vin_number, miles, accident)";
//    $sql .="VALUES (";
//    $sql .="'" . $model . "',";    // '$model,'
//    $sql .="'" . $year . "',";  
//    $sql .="'" . $color . "',";  
//    $sql .="'" . $vin_number . "',";  
//    $sql .="'" . $miles . "',";  
//    $sql .="'" . $accident . "'"; 
//    $sql .=")";
//    $result= mysqli_query($db, $sql);
    
    //For INSERT statmens the result is TRUE/FALSE
    
    
    
    $result= insert_new_car($model, $year, $color, $vin_number, $miles, $accident);
    $new_id= mysqli_insert_id($db);
    redirect_to(url_for('cars/show.php?id='.$new_id));
        
    
} else {
    
    redirect_to(url_for('/cars/new.php'));
}

 ?> 