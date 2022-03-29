<?php


include "baza.php";

?>
<h1>SHAXAR 1 istiqlol</h1>
<table border="1">
    <tr>
        <th>Ism</th>
        <th>Kochasi</th>
        <th>Uyi</th>
        <th>Telefon nomer</th>
    </tr>
    
        <?php
            foreach ($city_key['shaxar1']['Marg\'ilon']['istiqlol'] as $key=>$value) {
                ?>
                <tr>
                    <td><?=$key?></td>
                    <td><?=$value['kochasi']?></td>
                    <td><?=$value['uy']?></td>
                    <td><?=$value['telefon nomeri']?></td>
                </tr>
                <?php
            }
        ?>

    
</table>