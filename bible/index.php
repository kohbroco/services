<?php
/**
 * Created by PhpStorm.
 * User: Conrad
 * Date: 17/1/2017
 * Time: 11:18 PM
 */
$data = "Timothy Lim
Nicole Wong
Danielle Moi
Adriel Tan
Jonathan Chan
Celeste Wu
Daniel Hui
Elaine Ling
Eliora Seow
Hannah Chia
Jediel Yew
Ryan Chua
Joshua Teng
Ezra
Marcus Phua
Abel Tng
Brendon Pang
Edwin Koh
Faith Chan
Ian Yeo
Jerry Lew
Joshua Choy
Joylynn Teo
Kai Feng
Nathaniel Tan
Nicholas Chan
Daniel Hon
Renee
Shi Liu
Abigail Sng
Isabel Goh
Gerraine Goh
Tan Tze Xuan
Samuel Lee
Marcus Teo
Ezekiel Lee
Jabez Tang
Matthew Chia";
$lines = explode("\n", $data);
$lines = array_map('trim', $lines);
$op = "";
foreach ($lines as $line){
    $tokens = explode(" ", $line);
    $token_count = count($tokens);
    $surname = $tokens[$token_count - 1];
    $op .= $surname;

    $remainder = implode(" ", array_slice($tokens, 0, $token_count - 1));
    $op .= " $remainder" . "\n";
}
$filepath = __DIR__ . "/data/names_formatted.txt";
$file = fopen($filepath, "w");
fwrite($file, $op);
fclose($file);
echo "done";
exit;
$json_data = file_get_contents(__DIR__ . '/data/NIV.json');
$content = json_decode($json_data);
foreach($content as $book => $chapters){
    $book_path = __DIR__ . "/data/NIV/$book";
    if(!file_exists($book_path)){
        mkdir($book_path);
    }
    foreach($chapters as $chapter => $verses){
        $chapter_path = "$book_path/$chapter";
        if(!file_exists($chapter_path)){
            mkdir($chapter_path);
        }
        //Create the full chapter in a json file
        $full_chapter_path = "$chapter_path/chapter.json";
        $file = fopen($full_chapter_path, "w+");
        $verse_json_data = json_encode($verses);
        fwrite($file, json_encode($verse_json_data));
        fclose($file);
        foreach($verses as $verse => $verse_data){
            $verse_path = "$chapter_path/$verse.txt";
            if(!file_exists($verse_path)){
                $file = fopen($verse_path, "w+");
                fwrite($file, $verse_data);
                fclose($file);
            }

        }
    }
}

echo 'unpacked';