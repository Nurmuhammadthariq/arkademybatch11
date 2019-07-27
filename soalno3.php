<?php

function cetak_gambar($cetak){
    for ($i = 1; $i <= $cetak; $i++){  
        for ($j = 1; $j <= $cetak; $j++){
        	if ($j == 1 || $j == $cetak || $i == ($cetak/2)+0.5){
        		echo "*&nbsp &nbsp ";
            }
        	else{
        		echo "=&nbsp &nbsp ";
        	}
        }  
        echo "<br>"; 
    }  
}
cetak_gambar(5);
?>
