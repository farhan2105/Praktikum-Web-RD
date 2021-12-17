<?php
function pengurutan(){
    $dataList = array('lari','aduh','kesandung','roda','aneh','samir','her','li','an','syah');
    
    sort($dataList);

    for($i=0; $i<10; $i++){
        echo $dataList[$i];
        echo '<br>';
    }
}
echo '<b>Pengurutan 10 Data Acak</b><br><br>';
pengurutan();
?>