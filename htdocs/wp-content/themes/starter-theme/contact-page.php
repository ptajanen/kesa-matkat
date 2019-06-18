<?php
/**
* Template Name: Contact-page
*
* @package WordPress
* @subpackage starter-theme
* @since Twenty-nineteen
*/
?>

<?php

get_header();

?>

<main>

<h3>Ota yhteyttä</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">Etunimi</label>
    <input type="text" id="fname" name="firstname" placeholder="Nimesi..">

    <label for="lname">Sukunimi</label>
    <input type="text" id="lname" name="lastname" placeholder="Sähköpostiosoitteesi..">

    <label for="lname">Sähköposti</label>
    <input type="text" id="lname" name="lastname" placeholder="Puhelinnumeorsi..">

    <label for="subject">Aihe</label>
    <textarea id="subject" name="subject" placeholder="Kirjoita tähän.." style="height:200px"></textarea>

    <input type="submit" value="Lähetä">
  </form>
</div>

</main>

<?php
get_footer();
