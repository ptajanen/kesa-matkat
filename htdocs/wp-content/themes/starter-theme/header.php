<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <header>
          <div class="top-bar">
           <div class="top-bar-left">
               <ul>
                   <a href="http://localhost:8080/">Etusivu</a>
                   <a href="http://localhost:8080/blogit">Blogi</a>
                   <a href="http://localhost:8080/kohteet">Matkakohteet</a>
                   <a href="http://localhost:8080/yhteystiedot/">Yhteystiedot</a>
                   
               </ul>
           </div>
           <div class="top-bar-right">
               <ul class="menu">
                   <li><input type="search" placeholder="Kirjoita tähän..."></li>
                   <li><button type="button" class="button">Etsi</button></li>
               </ul>
           </div>
       </div>
   </header>
   <div class="main-wrapper">
   <main>
   
