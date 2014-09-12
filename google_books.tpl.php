<?php
/**
 * @file
 * Displays a Google Books item.
 *
 * Available variables:
 * - $title_anchor: The pre-generated achor tag with the title.
 * - $book_image: Pre-generated Google Books image tag.
 * - $worldcat: The pre-generated anchor tag with a WorldCat link.
 * - $librarything: The pre-generated anchor tag for Library Thing.
 * - $openlibrary: The pre-generated anchor tag for Open Library.
 * - $google_books_js_string: Google Books reader javascript string.
 * - $isbn: The book ISBN, if it exists. It should if $google_books_js_string.
 * - $reader_width: Width in pixels of Google Reader.
 * - $reader_height: Height in pixels of Google Reader.
 * - $bib_data: Pre-generated list of biblio fields.
 *
 * @see google_books_preprocess_google_books_aggregate()
 * @see theme_google_books_biblio()
 *
 * @ingroup themeable
 */
?>

<!-- Main CSS of a Google Books entry, multiple per page. -->
<div class="google_books">

  <!-- Print the title of the book. -->
  <?php if ($title_anchor): ?>
  <div class="google_books_title">
    <?php print $title_anchor; ?>
  </div>
  <?php endif; ?>

  <!-- Build image theme function call for book cover. -->
  <?php if ($book_image): ?>
  <div class="google_books_image">
    <?php print $book_image; ?>
  </div>
  <?php endif; ?>

  <!-- Display links and leave empty divs for theming. -->
  <div class="google_books_links">
    <?php if ($worldcat): ?>
      <span class="google_books_worldcat">
        <?php print $worldcat . "&nbsp;"; ?>
      </span>
    <?php endif; ?>
    <?php if ($librarything): ?>
      <span class="google_books_librarything">
        <?php print $librarything . "&nbsp;"; ?>
      </span>
    <?php endif; ?>
    <?php if ($librarything): ?>
      <span class="google_books_openlibrary">
        <?php print $openlibrary; ?>
      </span>
    <?php endif; ?>
  </div>

  <!-- Show the Google Books viewer if needed. -->
  <!-- Embed direct because of the filter JavaScript issue in Drupal -->
  <?php
    if (!empty($google_books_js_string)):
      print "<script type='text/javascript'>" . $google_books_js_string . "</script>";
      print '<div class="google_books_reader" id="viewerCanvas' . $isbn . '" style = "width:' . $reader_width . 'px; height:' . $reader_height . 'px"></div>';
    endif;
  ?>

  <div class="google_books_datalist">
    <!-- List the selected and available Google Books data fields. -->
    <?php
    print $bib_data;
    ?>
  </div>
  
  <!-- Prevent overlap of next element. -->
  <div style="clear:both;"></div>
  
</div>
