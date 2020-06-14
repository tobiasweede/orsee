<?php
// part of orsee. see orsee.org
ob_start();
$menu__area="information";
$title="information";
include ("header.php");

if ($proceed) {
    echo '<center><BR>
            <TABLE class="or_formtable" style="width: 80%"><TR><TD>';
        echo content__get_content("information");
        echo '
            </TD></TR></TABLE>

            </center>';

}
include ("footer.php");
?>