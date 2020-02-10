<?php

function find_all_cars(){
    global $db;
    
    $sql= "SELECT * FROM cars ";
    $sql .= "ORDER BY year ASC ";
    //echo $sql;
    $result= mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;

}


function find_car_by_id($id){
    
   global $db; 
   $sql="SELECT * FROM cars ";
   $sql .= "WHERE id='" . $id ."'";
   $result= mysqli_query($db, $sql);
   confirm_result_set($result); 
   $car= mysqli_fetch_assoc($result);
   mysqli_free_result($result);
   return $car;  //return a assoc.array
    
}

function insert_new_car($model,$year, $color, $vin_number, $miles,$accident){
    global $db;    
    $sql = "INSERT INTO cars";
    $sql .="(model, year, color, vin_number, miles, accident)";
    $sql .="VALUES (";
    $sql .="'" . $model . "',";    // '$model,'
    $sql .="'" . $year . "',";  
    $sql .="'" . $color . "',";  
    $sql .="'" . $vin_number . "',";  
    $sql .="'" . $miles . "',";  
    $sql .="'" . $accident . "'"; 
    $sql .=")";
    $result= mysqli_query($db, $sql);
    
    //For INSERT statmens the result is TRUE/FALSE
   
    if($result){
        return true;
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
    
}


function  update_car($car){
    global $db;
    
  // $sql = "UPDATE cars SET   model='$car['model']', year='$car['year']', color='$car['color']', vin_number='$car['vin_number']', miles='$car['miles']', accident='$car['accident']' WHERE id='$car['id']'";
   $sql = "UPDATE cars SET ";
   $sql .= "model='" . $car['model'] . "', ";
   $sql .= "year='" . $car['year'] . "', ";
   $sql .= "color='" . $car['color'] . "', ";
   $sql .= "vin_number='" . $car['vin_number'] . "', ";
   $sql .= "miles='" . $car['miles'] . "', ";
   $sql .= "accident='" . $car['accident'] . "' ";
   $sql .= "WHERE id='" . $car['id'] . "' ";
   $sql .= "LIMIT 1";
   
   $result= mysqli_query($db, $sql);
   //FOr UPDATE statemens ,$result is TRUE/FALSE
   
   if($result){
      return true;
       
   }else
   {
       echo mysqli_error($db);
       db_disconnect($db);
       exit;
   }
   
}

function delete_car($id){
    global $db;
    $sql = "SELECT * FROM cars ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .="LIMIT 1";
    $result= mysqli_query($db, $sql);
    
    //For delete statement ,$result is TRUE/FAlSE
    
    if($result){
        return true;
    }else{
        //Delete failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
    
}

?>