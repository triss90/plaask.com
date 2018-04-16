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
            <a href="#0" onclick="computerPresetSize();" id="computer-toggle" title="Computer screen size"><svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-laptop"></use></svg></a>
            <a href="#0" onclick="phonePresetSize();" id="phone-toggle" title="Phone screen size"><svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-phone"></use></svg></a>
            <a href="#0" onclick="tabletPresetSize();" id="tablet-toggle" title="Tablet screen size"><svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-tablet"></use></svg></a>
            <span class="seprator"></span>
            <span href="#0" class="dropdown">
                <span class="dropdown-label">
                    <svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-list"></use></svg>
                </span>
                <div class="dropdown-menu">
                    <a href="" class="dropdown-item">test</a>
                    <a href="" class="dropdown-item">test</a>
                    <a href="" class="dropdown-item">test</a>
                </div>
            </span>
            <a href="#0" onclick="previewWebsite();" title="Preview website"><svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-view"></use></svg></a>
            <a href="#0" title="Export website"><svg class="icon" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-jump"></use></svg></a>
        </div>
    </nav>
    
    <div id="page-size">
        <span id="page-width"></span>
        <span id="page-height"></span>
    </div>


    <div id="p-page">
        <div class="p-header">
            <div class="p-menu">
                <span class="p-close"></span>
                <span class="p-minimize"></span>
                <span class="p-maximize"></span>
            </div>
            <div class="p-search">
                <p><span>https://</span>tristanwhite.info</p>
            </div>
        </div>
        <div class="p-window">
            <iframe id="theme1" src="/assets/theme1/theme1.php" width="100%" height="100%" frameborder="0"></iframe>
        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="../assets/js/plaask-editor-min.js"></script>

<script>

</script>


<?php include_once('../inc/footer.php'); ?>
