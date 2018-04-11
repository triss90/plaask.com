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

   <div id="p-page">
       <h1 contenteditable="true" class="contenteditable">This is a website title</h1>
       <p contenteditable="true" class="contenteditable">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quibusdam, at ex odio quasi inventore sint cumque ipsam eveniet iusto reiciendis asperiores labore, adipisci eligendi consectetur? Mollitia expedita iusto sapiente.</p>
   </div>

</div>

<?php include_once('../inc/footer.php'); ?>
