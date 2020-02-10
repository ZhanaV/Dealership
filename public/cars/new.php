<?php

require_once('../../private/initialize.php');

?>

<?php $page_title = 'Input new Car'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/cars/index.php'); ?>">&laquo; Back to List of Cars</a>

  <div class="subject new">
    <h1>Create </h1>

    <form action="<?php echo url_for('/cars/create.php'); ?>" method="post">
            <dl>
              <dt>Model of the car</dt>
              <dd><input type="text" name="model" value="" /></dd>
            </dl>
              <dl>
              <dt>Year</dt>
              <dd><input type="text" name="year" value="" /></dd>
            </dl>
              <dl>
              <dt>Color</dt>
              <dd><input type="text" name="color" value="" /></dd>
            </dl>
              <dl>
              <dt>VIN Number</dt>
              <dd><input type="text" name="vin_number" value="" /></dd>
            </dl>
              <dl>
              <dt>Miles</dt>
              <dd><input type="text" name="miles" value="" /></dd>
            </dl>
              <dl>
              <dt>Accident</dt>
              <dd><input type="text" name="accident" value="" /></dd>
            </dl>

            <div id="operations">
              <input type="submit" value="Create Subject" />
            </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
