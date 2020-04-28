<?php
    $cities = ['Berlynas','Roma','Londonas'];
    $cities[] = 'Tokijas';
    print_r($cities);
?>
<ul>
    <?php
    echo "<li>$cities[1]</li>";
    ?>
</ul>
<?php
    $cities2 = ['tokijas'=> 13.6,'vasingtonas'=> 0.6,'maskva'=>11.5];
    $cities2['londonas'] = 8.6;
    print_r($cities2);
?>
<ul>
    <?php
    echo '<li>Gyventojų skaičius: '.$cities2['tokijas'].' mln.</li>';
    ?>
</ul>
