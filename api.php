<?php
const API_MOVIE = "https://api.themoviedb.org/3/search/movie";
// xu ly call api - tra du lieu cho phia client
if(isset($_POST['movie'])){
    $nameMovie = trim($_POST['movie']);
    // call vao api
    $urlApi = API_MOVIE."?query=".$nameMovie."&api_key=cfe422613b250f702980a3bbf9e90716";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlApi);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $output = curl_exec($ch);
    curl_close($ch);  
    $output = json_decode($output, true);
    $data = isset($output['results']) ? $output['results'] : [];
    echo json_encode($data);
}