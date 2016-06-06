<?php
/**
 * Created by PhpStorm.
 * User: stijn
 * Date: 6-6-2016
 * Time: 10:59
 */


    $data_array = array(
        array("vraag" => "De eerste vraag", "piraat" => "Arrrr1", "visser" => 'fishyy1', "handelaar" => 'Echt pittig1', "kapitein" => 'Daar heb ik mensen voor1'),
        array("vraag" => "De tweede vraag", "piraat" => "Arrrr2", "visser" => 'fishyy2', "handelaar" => 'Echt pittig2', "kapitein" => 'Daar heb ik mensen voor2'),
        array("vraag" => "De derde vraag", "piraat" => "Arrrr3", "visser" => 'fishyy3', "handelaar" => 'Echt pittig3', "kapitein" => 'Daar heb ik mensen voor3')
    );

    echo json_encode($data_array);

?>