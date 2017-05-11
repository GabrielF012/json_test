<?php

function AjoutStyle($style_array){
    $style = json_decode(file_get_contents("artiste.json"), true);
    foreach($style['Style'] as $data){
        if ($data['nom'] == $style_array){
            return $data['id'];
        }
    }
}

function NomStyle($style){
    $data = json_decode(file_get_contents("artiste.json"), true);
    foreach($data['Style'] as $val){
        if ($style == $val['id']){
            return $val['nom'];
        }
    }
}

