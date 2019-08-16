</main>
<!-- CONTENT EOF   -->
<!-- BEGIN HEADER -->
<?php
if (is_404()) {
    ar_the_view('page-404__header');
} else { // if (is_front_page() || is_home())
    ar_the_view('page-main__header');
}
?>
<!-- HEADER EOF   -->