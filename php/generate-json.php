<?php
    header('Content-Type: application/json');
    echo "Generate Json";
    $json = array(
        "name" => "John",
        "age" => "30",
        "cars" => array(
            [
                "name" => "Ford",
                "models" => array(
                    "Fiesta",
                    "Focus",
                    "Mustang"
                )
            ],
            [
                "name" => "BMW",
                "models" => array(
                    "320",
                    "X3",
                    "X5"
                )
            ],
            [
                "name" => "Fiat",
                "models" => array(
                    "500",
                    "Panda"
                )
            ]
        )
    );
    echo json_encode($json);
?>