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
    .icon {
        height: 24px;
        width: 24px;
        margin: 10px;
    }
    .color {
        border: 1px solid var(--p-border-color);
        border-radius: 4px;
        width: 20%;
        min-width: 220px;
        padding: 10px;
        margin: 10px;
        display: inline-block;
    }
</style>

<div class="container">

    <!-- COLORS -->
    <div id="colors">
        <h4>Colors</h4>
        <div class="colors">
            <h5>Primary colors</h5>
            <div class="color" style="background:var(--p-primary-color);color:white;">var(--p-primary-color)</div>
            <div class="color" style="background:var(--p-dark-primary-color);color:white;">var(--p-dark-primary-color)</div>
            <div class="color" style="background:var(--p-light-primary-color);color:white;">var(--p-light-primary-color)</div>

            <br><br>
            
            <h5>Text colors</h5>
            <div class="color" style="background:var(--p-heading-color);color:white;">var(--p-heading-color)</div>
            <div class="color" style="background:var(--p--text-color);color:white;">var(--p--text-color)</div>

            <br><br>
            
            <h5>Background colors</h5>
            <div class="color" style="background:var(--p-dark-body-color);color:white;">var(--p-dark-body-color)</div>
            <div class="color" style="background:var(-p-light-body-color);color:black;">var(-p-light-body-color)</div>
            <div class="color" style="background:var(--p-extralight-body-color);color:black;">var(--p-extralight-body-color)</div>
            <div class="color" style="background:var(--p-border-color);color:black;">var(--p-border-color)</div>
            <div class="color" style="background:var(--p-light-border-color);color:black;">var(--p-light-border-color)</div>
            <div class="color" style="background:var(--p-fill-color);color:black;">var(--p-fill-color)</div>

            <br><br>
            
            <h5>Status colors</h5>
            <div class="color" style="background:var(--p-error-color);color:black;">var(--p-error-color)</div>
            <div class="color" style="background:var(--p-light-error-color);color:black;">var(--p-light-error-color)</div>
            <div class="color" style="background:var(--p-warning-color);color:black;">var(--p-warning-color)</div>
            <div class="color" style="background:var(--p-light-warning-color);color:black;">var(--p-light-warning-color)</div>
            <div class="color" style="background:var(--p-success-color);color:black;">var(--p-success-color)</div>
            <div class="color" style="background:var(--p-light-success-color);color:black;">var(--p-light-success-color)</div>
            <div class="color" style="background:var(--p-info-color);color:black;">var(--p-info-color)</div>
            <div class="color" style="background:var(--p-light-info-color);color:black;">var(--p-light-info-color)</div>
        </div>
    </div>

    <hr>

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

    <!-- ICONS -->
    <div class="icons">
        <h4>SVG icon system</h4>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-add-reaction"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-at"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-back"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-bell"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-bold"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-chat"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-clip"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-code"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cog"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-computer"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-copy"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-customize"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-edit"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-emoji"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-github"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-gitlab"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-google"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-hashtag"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-help"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-hubot"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-info-circled"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-italic"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-key"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-keyboard"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-language"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-linkedin"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-livechat"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-lock"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-magnifier"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-mail"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-map-pin"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-menu"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-message"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-mic"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-multi-line"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-mute"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-permalink"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-pin"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-queue"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quote"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-reload"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-send"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-share"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-sign-out"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-snippet"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-star"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-strike"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-team"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-trash"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-upload"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-user"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-user-rounded"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-video"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-warning"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-jump"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-flag"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-circle"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-eye-off"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cross"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-post"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-discover"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-import"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-modal-warning"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-modal-success"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-modal-info"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-modal-error"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-file-document"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-file-generic"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-file-pdf"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-file-sheets"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-down"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-mobile"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-hand-pointer"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-shield"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-shield-alt"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-shield-check"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-check"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-team"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-user-plus"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-globe"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-th-list"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-list"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-list-alt"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-sort"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-podcast"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-angle-down"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-play-solid"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-play"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-pause"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-volume-mute"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-volume"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-sort"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-clock"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-sort-amount-down"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-edit-rounded"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cube"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-circle-cross"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-circle-check"></use></svg>
        <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-loading"></use></svg>
    </div>

    <hr>

    <!-- TOOLTIPS --> 
    <div id="tooltips">
        <h4>Tooltips</h4>
        <a href="#" data-tooltip="I’m the tooltip text.">I’m a link with a tooltip.</a>
        <br><br>
        <button class="button primary" data-tooltip="I’m the tooltip text.">I’m a Button with a tooltip.</button>
        <br>
        <p>Lorem ipsum dolor sit amet, <strong data-tooltip="AWESOME TOOLTIP">consectetur adipisicing elit</strong>. Hic, voluptatem cupiditate eligendi autem itaque perferendis molestiae aspernatur distinctio! Porro, corrupti eaque. Et fuga molestiae ut labore inventore laborum temporibus magni.</p>
    </div>

    <hr>
</div>

<?php include_once('../inc/footer.php'); ?>
