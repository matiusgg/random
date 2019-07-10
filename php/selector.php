<?php

$alumnos=[
    'Jordi',
    'David',
    'Luis',
    'Alexis',
    'Petro',
    'Alejandro',
    'Fran',
    'Adrian',
    'Lolo',
    'Cristian',
    'Jaume',
    'Mateo',
    'Jose',
    'Julia',
    'Jorge',
    'Toni'

];

function randomizer(){
    shuffle($alumnos);
    foreach($alumnos as $alumno){
        echo "$alumno";
    }

}