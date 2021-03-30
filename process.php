<?php


$table = [128, 64, 32, 16, 8, 4, 2, 1];


    $ip = isset($_GET['ip']) ?  $_GET['ip'] : 0;


    function converToBinary($val){

        $acumolator = 0;
        $result = "";
        global $table;
    

        if($val){
            for($i = 0;  $i <= count($table)-1; $i++){
            if($table[$i] +  $acumolator <= $val){
                $result = $result . "1";
                $acumolator = $acumolator  + $table[$i];
            }else{
                $result = $result . "0";
            }
        }

    return $result;
    }else{
        return '00000000';
    }

}   


 
   $ipN = explode('.', $ip);

?>


<table border="1">
    <thead>
        <tr>
            <?php foreach($ipN as $octect){?>
            <th><?php echo  $octect; ?></th>
            <?php }?>
        </tr>
    </thead>

    <tbody>
        <tr>
            <?php foreach($ipN as $octect){?>
            <td><?php echo  converToBinary($octect); ?></td>
            <?php }?>
        </tr>
    </tbody>
</table>