<?php
// Include App
include_once('app/app.php');

// Default Page ID
if (!isset($pageId) || empty($pageId)) {
    $pageId = "plassk";
}

// Default Page Title
if (!isset($pageTitle) || empty($pageTitle)) {
    $pageTitle = "Plaask - Landingpage builder";
}

// Default Page description
if (!isset($pageDescription) || empty($pageDescription)) {
    $pageDescription = "Plaask - The simple landingpage builder";
}

// Default Page keywords
if (!isset($pageKeyWords) || empty($pageKeyWords)) {
    $pageKeyWords = "plaask";
}

// Default Page Author
if (!isset($pageAuthor) || empty($pageAuthor)) {
    $pageAuthor = "Tristan White";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeyWords; ?>">
    <meta name="author" content="<?php echo $pageAuthor; ?>">
    <title><?php echo $pageTitle; ?></title>
    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="/assets/css/app.css" rel="stylesheet">
</head>
<body id="<?php echo $pageId; ?>">

<?php

?>