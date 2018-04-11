<?php
// Setting page specfic variables
$pageId = "editor";
$pageTitle = "Plaask - Editor";
$pageDescription = "";
$pageKeyWords = "";
$pageAuthor = "";

include_once('../inc/header.php');
include_once('../assets/icons.html');
include_once('../assets/colors.html');
?>

<div id="editor-sidebar">

</div>

<div id="editor-content">

    <div class="notification info">
        <svg class="notification-icon" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-modal-info"></use>
        </svg>
        <div class="notification-content">
            <b class="notification-title">Account status</b>
            <p class="notification-message">All Good!</p>
        </div>
    </div>

    <div class="notification success">
        <svg class="notification-icon" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-modal-success"></use>
        </svg>
        <div class="notification-content">
            <b class="notification-title">Account status</b>
            <p class="notification-message">All Good!</p>
        </div>
    </div>

    <div class="notification warning">
        <svg class="notification-icon" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-modal-warning"></use>
        </svg>
        <div class="notification-content">
            <b class="notification-title">Account status</b>
            <p class="notification-message">All Good!</p>
        </div>
    </div>

    <div class="notification error">
        <svg class="notification-icon" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-modal-error"></use>
        </svg>
        <div class="notification-content">
            <b class="notification-title">Account status</b>
            <p class="notification-message">All Good!</p>
        </div>
    </div>

</div>

<?php include_once('../inc/footer.php'); ?>
