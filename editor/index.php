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

    <div id="page-size">
        <span id="page-width"></span>
        <span id="page-height"></span>
    </div>

   <div id="p-page">
       <h1 contenteditable="true" class="contenteditable">This is a website title</h1>
       <p contenteditable="true" class="contenteditable">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quibusdam, at ex odio quasi inventore sint cumque ipsam eveniet iusto reiciendis asperiores labore, adipisci eligendi consectetur? Mollitia expedita iusto sapiente.</p>
       <svg class="notification-icon" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-loading"></use>
        </svg>
   </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="../assets/js/plaask-editor-min.js"></script>

<?php include_once('../inc/footer.php'); ?>