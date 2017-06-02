<?php
if ( in_category('examinfo') ) {
    include(TEMPLATEPATH . '/single-examinfo.php');
} else if (in_category('outstanding')) {
    include(TEMPLATEPATH . '/single-outstanding.php');
} else {
    include(TEMPLATEPATH . '/single-paper.php');
}
?>