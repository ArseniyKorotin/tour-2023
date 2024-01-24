<?php
include "header.php";
include_once "db.php";
?>

<div class="col-sm-12">
    <div class="container my-5">
        <p class="h3">Your order:</p>
        <p class="h4">Country: <?=$_GET["country"]?> </p>
        <p class="h5">Stars: <?=$_GET["stars"]?></p>
        <p class="h5">Transport: <?=$_GET["transport"]?></p>


    <?php
$tours_available = false;
$c = 0;
foreach ($tours as $key => $tour) {
    if ($tour["country"] === $_GET["country"] && $_GET["price"] >= $tour["price"] && $_GET["stars"] >= $tour["stars"] && $_GET["transport"] === $tour["transport"]) {
        $tours_available = true;
        $c++;
        if ($tours_available && $c == 1) {
            print_r("<p class='h5'>Available tours for you: </p>");
        }
        print_r($tour["name"] . "; <br> ");
    }
}

if (!$tours_available) {
    print_r("<p class='h5'>Sorry, but the tours you requested are not available right now. <br> But you can try other tours</p>");
}
?>
</div>
    <div class="container my-5">
        <div class="picture my-5">
            <img src="./images/flag_<?=$_GET["country"]?>.svg" alt="<?=$_GET["country"]?> flag">
        </div>
        <br>
    </div>

    <hr class="d-sm-none">

    <?php
// print_r($country_info[$_GET["country"]]);
?>
</div>
</div>
</div>
<?=include "footer.php"?>;