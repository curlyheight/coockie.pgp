
<?php

    setcookie("fav_food", "Pizza and BUrger", time() + 86400 *10, "/");
    setcookie("fav_Drink", "tiger", time() + 86400 *2 , "/");
    setcookie("fav_Dresss", "PAnjabi", time() + 86400 *2 , "/");

    /*foreach($_COOKIE as $key => $value){
        echo"{$key} = {$value} <br>";    }
      */

if(isset($_COOKIE["fav_food"])){
    echo"Buy some {$_COOKIE["fav_food"]}";
}else{
    echo"I don't know your favourite food ";
}
        
?>