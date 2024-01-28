<?php
include "header.php";
?>
<div class="col-sm-4">
<form method="post" action="countries.php" name="myform">
    <label for="formCountry">Choose country:</label>
    <select name="formCountry" id="formCountry" class="form-select">
        <?php
        $uniqueCountries = array_unique(array_column($tours, 'country'));
        
        foreach ($uniqueCountries as $country) {
            print_r("<option value=\"$country\">$country</option>");
        }
        ?>
    </select>
    <br>
    
    <label for="price">Choose price:</label><br>
    <input type="range" id="price" name="price" min="100" max="10000" step="50" oninput="outputRange.value = this.value">
    <output id="outputRange" class="price" for="price">5000</output><br><br>
    
    <label for="transport">Choose transport:</label>
    <select class="form-select" name="transport" id="transport">
        <?php
        $uniqueTransport = array_unique(array_column($tours, 'transport'));
        
        foreach ($uniqueTransport as $transport) {
            print_r("<option value=\"$transport\">$transport</option>");
        }
        ?>
    </select>
    <br>
    
    <label for="stars">Stars (1 to 5):</label>
    <input type="number" id="stars" name="stars" class="form-control" min="1" max="5" value="3"><br>
    
    <button name="formSubmit" class="btn btn-primary">Submit</button>
</form>

</div>
    </div>
    </div>
    <?php
include "footer.php";
?>