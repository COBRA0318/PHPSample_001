<?php

//URLを指定する
$url = 'https://www.sejuku.net/blog/blog/';

//URLの存在有無の確認
if (file_get_contents($url) != FALSE){

    //URLを表示
    echo file_get_contents($url);

}else{

    //エラーログを出力
    error_log('bbbErr'.$url.'の読み込みに失敗しました。', 0);
}

?>