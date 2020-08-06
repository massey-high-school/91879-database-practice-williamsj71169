<?php include "topbit.php"; 

$showall_sql="SELECT *
FROM `91879_book_reviews`
ORDER BY `91879_book_reviews`.`Title` ASC";
$shoeall_query=mysqli_query($dbconnect, $showall_sql);
$shoeall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);


?>
        
<div class="box main">
            
    <h2>All Items</h2>




</div>    <!-- / main -->
        
<?php include "bottombit.php"; ?>