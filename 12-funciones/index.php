<?php

function tablaM($number){
    echo '<h2> Table of: '.$number.'</h2>';
    for($i = 0; $i<=10; $i++){
        $result = ($i * $number);
        echo $number.' * '.$i.' = '.$result.'<br>';
    }
    echo '<hr>';
}

for($i = 0; $i<=10; $i++){
    tablaM($i);
}

?>

<script>
    function refresh(){
        setTimeout(function (){
            window.location.reload();
            console.log('test jav');
        }, 10000)
    }
    refresh();
</script>