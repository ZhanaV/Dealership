<?php require_once('../../private/initialize.php'); ?>

<?php

// $id = isset($_GET['id']) ? $_GET['id'] : '1';
  
$id = $_GET['id'] ?? '1'; // PHP > 7.0


//$sql="SELECT * FROM cars ";
//$sql .= "WHERE id=" . $id;
//$sql .= "WHERE id='" . $id ."'";
//$result= mysqli_query($db, $sql);
//confirm_result_set($result);
//echo $sql;
//$car= mysqli_fetch_assoc($result);
//mysqli_free_result($result);

$car= find_car_by_id($id);

?>

<?php $page_title = 'Show Cars'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/cars/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">
      
      <h1>Car: <?php echo h($car['model']);?></h1>
      <div class="attributes">
          <dl>
              <dt>Model Name: </dt>
              <dd><?php echo h($car['model']);?></dd>
          </dl>
          <dl>
              <dt>Production Year: </dt>
              <dd><?php echo h($car['year']);?></dd>
          </dl>
          <dl>
              <dt>Color: </dt>
              <dd><?php echo h($car['color']);?></dd>
          </dl>
          <dl>
              <dt>Vin Number: </dt>
              <dd><?php echo h($car['vin_number']);?></dd>
          </dl>
          <dl>
              <dt>Miles: </dt>
              <dd><?php echo h($car['miles']);?></dd>
          </dl>
          <dl>
              <dt>Accidents: </dt>
              <dd><?php echo h($car['accident']);?></dd>
          </dl>
      </div>
      

    

  </div>

</div>

