<?php

function AjoutStyle($style_array){
    $style = json_decode(file_get_contents("artiste.json"), true);
    $id = count($style['Style']);
    foreach($style['Style'] as $data){
        if ($data['nom'] == $style_array){
            return $data['id'];
        }
    }
}

function NomStyle($style){
    $data = json_decode(file_get_contents("artiste.json"), true);
    $id = count($data['Style']);
    foreach($data as $value){
        foreach($data['Style'] as $val){
            if ($value == $val['id']){
                return $val['nom'];
            }
        }
    }
}