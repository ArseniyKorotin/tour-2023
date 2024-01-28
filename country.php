<?php
include "header.php";
include_once "db.php";
?>

<div class="col-sm-12">
    <div class="container my-5">
        <h1 class="display-5">Your order:</h1>
        <h1 class="display-5">Country: <?=$_GET["country"]?> </h1>
        <h1 class="display-5">Stars: <?=$_GET["stars"]?></h1>
        <h1 class="display-5">Transport: <?=$_GET["transport"]?></h1>


    <?php
$tours_available = false;
$c = 0;
foreach ($tours as $key => $tour) {
    if ($tour["country"] === $_GET["country"] && $_GET["price"] >= $tour["price"] && $_GET["stars"] >= $tour["stars"] && $_GET["transport"] === $tour["transport"]) {
        $tours_available = true;
        $c++;
        if ($tours_available && $c == 1) {
            print_r("<h5 >Available tours for you: </h5>");
        }
        print_r($tour["name"] . "; <br> ");
    }
}

if (!$tours_available) {
    print_r("<h5 >Sorry, but the tours you requested are not available right now.</h5>");
}
?>
</div>
    <div class="container">
        <div class="picture my-5">
            <img class="rounded" src="./images/flag_<?=$_GET["country"]?>.svg" alt="<?=$_GET["country"]?> flag">
        </div>
        <br>
    </div>

    <hr class="d-sm-none">

    <?php
print_r($country_info[$_GET["country"]]);
?>
</div>
</div>
</div>
<?php include "footer.php"?>