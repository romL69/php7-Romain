<?php

function randomSerie()
{
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $newArray = array_keys($shows);
    $randomIndex = rand(0, count($newArray) - 1);
    $showname=$newArray[$randomIndex];
    return $shows[$showname];
}

function getSerie()
{
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $slug='toto';
if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];
}
$selectedShow=$shows[$slug];
return $selectedShow;
}

function PopularsFilms(int $indice){
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $MostPopularMovies=[];
    $Movie='Aucun';
    foreach ($shows as $key => $value)
     {
         $MostPopularMovies[$key] = $shows[$key]["statistics"]["popularity"];
     }
     arsort( $MostPopularMovies);
     $MoviesOrderByPopularity=array_keys( $MostPopularMovies);
     foreach($shows as $key => $value)
     {
         if ($MoviesOrderByPopularity[$indice]==$shows[$key]["slug"])
         {
           $Movie=$shows[$key];
         }
     }
     return $Movie;
}

/*function stars()
{
    for ($i = 0; $i < getSerie()['statistics']['rating']-1; $i++) {
    print '<i class="fa fa-star"></i>';
    if(getSerie()['statistics']['rating']-$i-1>0.5 && getSerie()['statistics']['rating']-$i-1<1)
    {
        print '<i class="fa fa-star-half"></i>';
    }
    }
}*/

function MostPopularsFilms(int $indice){
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $MostPopularMovies=[];
    $Movie='Aucun';
    $slug='toto';
if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];
}
    foreach ($shows as $key => $value)
     {
         $MostPopularMovies[$key] = $shows[$key]["statistics"][$slug];
     }//cree tableau de films avec popularité
     arsort( $MostPopularMovies);//classe par ordre decroissant
     $MoviesOrderByPopularity=array_keys( $MostPopularMovies);
     foreach($shows as $key => $value)
     {
         if ($MoviesOrderByPopularity[$indice]==$shows[$key]["slug"])
         {
           $Movie=$shows[$key];
         }
     }
     return $Movie;
}

function TopRatedMovies(int $indice)
{
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $MostPopularMovies=[];
    $Movie='Aucun';
    foreach ($shows as $key => $value)
     {
         $MostPopularMovies[$key] = $shows[$key]["statistics"]["rating"];
     }
     arsort( $MostPopularMovies);
     $MoviesOrderByPopularity=array_keys( $MostPopularMovies);
     foreach($shows as $key => $value)
     {
         if ($MoviesOrderByPopularity[$indice]==$shows[$key]["slug"])
         {
           $Movie=$shows[$key];
         }
     }
     return $Movie;
}
function Stars($MovieRating){
    $CompleteStars=$MovieRating[0];
    $HalfStars=$MovieRating[2];

    for($NbStars=0; $NbStars<$CompleteStars;$NbStars++)
    {
        print '<i class="fa fa-star"></i>';

    }
    if ($HalfStars>2 && $HalfStars<7)
    {
       print '<i class="fa fa-star-half"></i>';
    }
    else if($HalfStars>=7)
    {
      print '<i class="fa fa-star"></i>';
    }
}

function StarsInClassement(int $indice){
$MovieRating=(string)TopRatedMovies($indice)["statistics"]["rating"];
    Stars($MovieRating);
}


function StarsInMovieDesription()
{
    $MovieRating=(string)getserie()['statistics']['rating'];
    Stars($MovieRating);
}
