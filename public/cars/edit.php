<?php

require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/cars/index.php'));
}

$id=$_GET['id'];

//$car= find_car_by_id($id);   //return associate array for car

if(is_post_request()) {

  // Handle form values sent by new.php
  $car=[];
  $car['id']=$id;
  $car['model'] = $_POST['model'] ?? '';
  $car['year'] = $_POST['year'] ?? '';
  $car['color'] = $_POST['color'] ?? '';
  $car['vin_number']=$_POST['vin_number'] ?? '';
  $car['miles']=$_POST['miles'] ?? '';
  $car['accident']=$_POST['accident'] ?? '';

  $result= update_car($car);
  redirect_to(url_for('cars/show.php?id=' . $id));
  
}else{
    $car= find_car_by_id($id);
    
    $car_set= find_all_cars();
    $car_count= mysqli_num_rows($car_set);
    mysqli_free_result($car_set);
}

?>

<?php $page_title = 'Edit Cars'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/cars/index.php'); ?>">&laquo; Back to List of Cars</a>

  <div class="subject edit">
    <h1>Edit List of cars</h1>

    <form action="<?php echo url_for('/cars/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt> Name</dt>
        <dd><input type="text" name="model" value="<?php echo h($car['model']); ?>" /></dd>
      </dl>
     <dl>
        <dt> Year</dt>
        <dd><input type="text" name="year" value="<?php echo h($car['year']); ?>" /></dd>
      </dl>
        <dl>
        <dt> Color</dt>
        <dd><input type="text" name="color" value="<?php echo h($car['color']); ?>" /></dd>
      </dl>
        <dl>
        <dt> VIN Number</dt>
        <dd><input type="text" name="vin_number" value="<?php echo h($car['vin_number']); ?>" /></dd>
      </dl>
        <dl>
        <dt> Miles</dt>
        <dd><input type="text" name="miles" value="<?php echo h($car['miles']); ?>" /></dd>
      </dl>
        <dl>
        <dt> Accident</dt>
        <dd><input type="text" name="accident" value="<?php echo h($car['accident']); ?>" /></dd>
      </dl>
       
        
        
      <div id="operations">
        <input type="submit" value="Edit Car" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>


