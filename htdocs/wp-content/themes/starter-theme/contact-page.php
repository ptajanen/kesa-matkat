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
<div class="container-contact">
<section class="contact-us-section">
  <div class="row medium-unstack">
    <div class="columns contact-us-section-right">
      <h1 class="contact-us-header">Ota yhteyttä</h1>
      <form class="contact-us-form">
        <input type="text" placeholder="Nimesi">
        <input type="email" placeholder="Sähköpostiosoitteesi">
        <textarea name="message" id="" rows="12" placeholder="Kirjoita viestisi tänne"></textarea>
        <div class="contact-us-form-actions">
          <input type="submit" class="button" value="Lähetä" />
        </div>
      </form>
    </div>
  </div>
</section>
</div>
</main>

<?php
get_footer();
