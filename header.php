<?php
include_once('./main_header.php');

Auth::check();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Evsu UM</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="./assets/css/app.min.css">
    <link rel="stylesheet" href="./assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="./assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="./assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

    <!-- Template CSS -->

    <link rel="stylesheet" href="./assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/evsu.jpg" />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <?php include './sidebar.php'; ?>
            <!-- Main Content -->
            <div class="main-content">