<?php

require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/cars/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

  $result = delete_car($id);
  redirect_to(url_for('/cars/index.php'));

} else {
  $car = find_car_by_id($id);
}

?>

<?php $page_title = 'Delete Car'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/cars/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject delete">
      <div class="subject show">
      
      <h1>Delete Car: <?php echo h($car['model']);?></h1>
        <p>Are you sure you want to delete this car?</p>
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
    

    <form action="<?php echo url_for('/cars/delete.php?id=' . h(u($subject['id']))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Car" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>


