<?php
/**
 * Created by PhpStorm.
 * User: stijn
 * Date: 6-6-2016
 * Time: 10:59
 */


    $data_array = array(
        array(
            "vraag" => "De eerste vraag",
            "antwoorden" => array(
            array("answer" => "antwoord 1", "value" => 3),  array("answer" => "antwoord 2", "value" => 1),
            array("answer" => "antwoord 3", "value" => 4),  array("answer" => "antwoord 4", "value" => 6)
            )
        ),
        array(
            "vraag" => "De eerste vraag",
            "antwoorden" => array(
                array("answer" => "antwoord 1", "value" => 3),  array("answer" => "antwoord 2", "value" => 1),
                array("answer" => "antwoord 3", "value" => 4),  array("answer" => "antwoord 4", "value" => 6)
            )
        ),
        array(
            "vraag" => "De eerste vraag",
            "antwoorden" => array(
                array("answer" => "antwoord 1", "value" => 3),  array("answer" => "antwoord 2", "value" => 1),
                array("answer" => "antwoord 3", "value" => 4),  array("answer" => "antwoord 4", "value" => 6)
            )
        )
           );

    echo json_encode($data_array);

?>