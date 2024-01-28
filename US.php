<?php
include "header.php";
include_once "db.php";
?>
<div class="row">
    <div class="col-sm-12">
        <h3>Your order:</h3>
        <h2><?=$_GET["country"]?> </h2>
        <h5>Photo of <?=$_GET["country"]?>:</h5>
        <p>Stars: <?=$_GET["stars"]?></p>
        <?php

$tour_keys = [];
foreach ($tours as $key => $tour) {
    if ($tour['country'] == $_GET["country"]) {
        $tour_keys[] = $key;
    }
}
print_r($tour_keys);
for ($i=0; $i < count($tour_keys); $i++) { 
    print_r($tours[$tour_keys[$i]]);
}


?>

        <div class="fakeimg">Fake Image
        </div>
        <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
        <h3 class="mt-4">Some Links</h3>
        <p>Lorem ipsum dolor sit ame.</p>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <hr class="d-sm-none">
    </div>

</div>

<?php
include "footer.php";
?>