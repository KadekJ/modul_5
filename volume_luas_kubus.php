<?php
    function volume_kubus($sisi1){
        return $sisi1*$sisi1*$sisi1;
    }
    $sisi1 = 55;
    echo "<b>Volume kubus dengan sisi $sisi1 =</b>  ";
    echo volume_kubus($sisi1);
    echo "<br>";
    echo "<br>";

    function luas_kubus($sisi2){
        return 6*$sisi2*$sisi2;
    }
    $sisi2 = 49;
    echo "<b>Luas kubus dengan sisi $sisi2 =</b> ";
    echo luas_kubus($sisi2);  
?>