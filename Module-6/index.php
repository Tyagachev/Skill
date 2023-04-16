<?php

$textStorage = [];

/*
* Функция добавления
*/

function add(string $title, string $text, &$textStorage) :void  {

    $textStorage[]= ['title' => $title, 'text' => $text];
}

add('Заголовок1', 'Текст1', $textStorage);
add('Заголовок2', 'Текст2', $textStorage);
add('Заголовок3', 'Текст3', $textStorage);
add('Заголовок4', 'Текст4', $textStorage);
add('Заголовок5', 'Текст5', $textStorage);

/*
* Функция удаления
*/

function remote(int $idx, array &$textStorage)  {

    if(array_key_exists($idx, $textStorage)) {
        unset($textStorage[$idx]);
        return true;
    } else {
        return false;
    }
}

echo remote( $idx = 3, $textStorage);

/*
* Функция редактирования
*/

function edit(int $idxText, string $strTitle, string $strText, array &$textStorage) {

        if (array_key_exists($idxText, $textStorage)) {
            $textStorage[$idxText]['title'] = $strTitle;
            $textStorage[$idxText]['text'] = $strText;
            return true;
        } else {
            return false;
        }
}

echo edit($idxText = 2, $strTitle = 'Это новый заголовок', $strText = 'Это новый текст',$textStorage);

var_dump($textStorage);
