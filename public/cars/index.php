<?php require_once('../../private/initialize.php'); ?>


<?php $page_title='Cars';?>
<?php include(SHARED_PATH.'/header.php'); ?>


<?php 

      $car_set= find_all_cars();
      


//$cars=[
//    ['id'=>'1','model'=>'BMW','year'=>'2020','color'=>'white','vin_number'=>'2323ssf2323','miles'=>'18','accident'=>'1'],
//    ['id'=>'2','model'=>'Honda','year'=>'2019','color'=>'white','vin_number'=>'2323sd2323','miles'=>'19','accident'=>'0'],
//    ['id'=>'3','model'=>'Mercedes','year'=>'2020','color'=>'white','vin_number'=>'23sd232323','miles'=>'20','accident'=>'1'],
//    ['id'=>'4','model'=>'BMW','year'=>'2019','color'=>'white','vin_number'=>'23sf232323','miles'=>'16','accident'=>'4'],
//    ];

?>

<div id="content">
    <div class="subjects listing">
        <h1>Cars</h1>
        <div class="actions">
            <a class="actions" href="<?php echo url_for('/cars/new.php') ?>"> Add new car to the list</a>
        </div>
        
        
        <table class="list">
            <tr>
                <th>ID</th>
                <th>Model</th>
                <th>Year</th>
                <th>Color</th>
                <th>VIN number</th>
                <th>Miles</th>
                <th>Accident</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            
            <?php  while($car = mysqli_fetch_assoc($car_set)){ ?>
            <tr>
                <td><?php echo h($car['id']);?></td>
                 <td><?php echo h($car['model']);?></td>
                 <td><?php echo h($car['year'] );?></td>
                 <td><?php echo h($car['color']);?></td>
                 <td><?php echo h($car['vin_number'] );?></td>
                 <td><?php echo h($car['miles'] );?></td>
                 <td><?php echo h($car['accident'] );?></td>
                 <td><a class="action" href="<?php echo url_for('/cars/show.php?id='.h(u($car['id']))) ?>">View</a></td>
                 <td><a class="action" href="<?php echo url_for('/cars/edit.php?id='.h(u($car['id'])))?>">Edit</a></td>
                 <td><a class="action" href="<?php echo url_for('/cars/delete.php?id='.h(u($car['id'])))?>">Delete</a></td>
                 

            </tr>
            
            <?php }?>
                        
        </table>
        
        <?php
        
        mysqli_free_result($car_set);
        
        ?>
        
        
    </div>
    
    
    
</div>



<?php include(SHARED_PATH .'/footer.php'); ?>


        
        