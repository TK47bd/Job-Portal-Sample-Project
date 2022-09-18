<?php

if(isset($_POST["country"])){

    $country = $_POST["country"];
     
    $countryArr = array(
                    "BD" => array("Remote", "Dhaka", "Sylhet", "Chittagong", "Khulna", "Barishal", "Rangpur", "Rajshahi", "Mymensingh"),
                    "UK" => array("London")
                );
     
    if($country !== '--SELECT--'){
        echo "<br/><label> City of Working: <i class='text-danger'>*</i> </label>";
        echo '<select class="form-control form-control-sm" name="City" required>';
            foreach($countryArr[$country] as $value){
                echo "<option>". $value . "</option>";
            }
        echo "</select>";
        echo '<small class="form-text text-muted">[If you want to do only remote or freelancing job/task, select "Remote".]</small>';

        echo "<br/><label> Location: <i class='text-danger'>*</i> </label>";
        echo "<input type='text' class='form-control form-control-sm' name='Location' placeholder='Location, ex- Tongi, Gazipur, Shahjadpur, Mirpur, Etc.' required>";
        echo '<small class="form-text text-muted">[Location is so much important and must have to be accurate.]</small>';
    } 
}else{
    exit();
}

?>