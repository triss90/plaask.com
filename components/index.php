<?php
// Setting page specfic variables
$pageId = "components";
$pageTitle = "Plaask - Components";
$pageDescription = "";
$pageKeyWords = "";
$pageAuthor = "";

include_once('../inc/header.php');
include_once('../assets/icons.html');
include_once('../assets/colors.html');
?>

<style>
    body {
        margin: 2rem 5rem;
    }
</style>

<div class="container">

    <!-- TYPOGRAPHY -->
    <div id="typography">
        <h4>Typography</h4>
        <p>We almost exclusively use <a href="https://fonts.google.com/specimen/Open+Sans" title="Open Sans website on google fonts" target="_blank">Open Sans</a> as the base typeface across the entire Plaask product. Maintaining typographic clarity and hierarchy is important; here is a showcase of different ways to structure content:</p>

        <h1>Heading Level One</h1>
        <h2>Heading Level Two</h2>
        <h3>Heading Level Three</h3>
        <h4>Heading Level Four</h4>
        <h5>Heading Level Five</h5>
        <h6>Heading Level Six</h6>

        <p>This is a normal paragraph. On static pages, it's designed for readability and optimizing the number of characters per line. The font size is larger to account for longer chunks of text.</p>

        <blockquote>This is a blockquote. While rarely used, it's designed to stand out from the main body of content and provide hierarchical contrast on the page.</blockquote>
    </div> 

    <hr>

    <!-- NOTIFICATIONS -->  
    <div id="notifications">

        <h4>Notifications</h4>
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

    <hr>

    <!-- LABELS --> 
    <div id="labels">
        <h4>Labels</h4>
        <span class="label">Label</span>
        <span class="label info">Info</span>
        <span class="label success">Success</span>
        <span class="label warning">Warning</span>
        <span class="label error">Error</span>
        <br>
        <p>Lorem ipsum dolor sit amet, <span class="label success">23</span>consectetur adipisicing elit. Hic, voluptatem cupiditate eligendi autem itaque perferendis molestiae aspernatur distinctio! Porro, corrupti eaque. Et fuga molestiae ut labore inventore laborum temporibus magni.</p>
    </div>

    <hr>

</div>

<?php include_once('../inc/footer.php'); ?>
