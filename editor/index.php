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

    <nav class="top-nav">
        <div class="nav-items">
            <a href="#0" onclick="computerPresetSize();" id="computer-toggle" data-tooltip-below="Computer screen size" title="Computer screen size"><svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-laptop"></use></svg></a>
            <a href="#0" onclick="phonePresetSize();" id="phone-toggle" data-tooltip-below="Phone screen size" title="Phone screen size"><svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-phone"></use></svg></a>
            <a href="#0" onclick="tabletPresetSize();" id="tablet-toggle" data-tooltip-below="Tablet screen size" title="Tablet screen size"><svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-tablet"></use></svg></a>
        </div>
        <div class="nav-items right">
            <span href="#0" class="dropdown">
                <span class="dropdown-label">
                    Tristan White
                    <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-angle-down"></use></svg>
                </span>
                <div class="dropdown-menu">
                    <a href="" class="dropdown-item">test</a>
                    <a href="" class="dropdown-item">test</a>
                    <a href="" class="dropdown-item">test</a>
                </div>
            </span>
            <a href="#0">Item2</a>
            <a href="#0">Item3</a>
            <a href="#0">Item4</a>
        </div>
    </nav>
    

    <div id="page-size">
        <span id="page-width"></span>
        <span id="page-height"></span>
    </div>

   <div id="p-page">
        <h1 id="p-header-title" contenteditable="true" class="contenteditable">This is a website title</h1>
        <p id="p-header-tagline" contenteditable="true" class="contenteditable">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quibusdam, at ex odio quasi inventore sint cumque ipsam eveniet iusto reiciendis asperiores labore, adipisci eligendi consectetur? Mollitia expedita iusto sapiente.</p>
        <br>
        <p id="p-header-tagline-two" contenteditable="true" class="contenteditable">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quibusdam, at ex odio quasi inventore sint cumque ipsam eveniet iusto reiciendis asperiores labore, adipisci eligendi consectetur? Mollitia expedita iusto sapiente.</p>
   </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="../assets/js/plaask-editor-min.js"></script>


<?php include_once('../inc/footer.php'); ?>
