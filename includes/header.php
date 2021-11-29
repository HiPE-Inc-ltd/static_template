<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="discription" content="static template">
    <meta name="keywords" content="keywords_01,keywords_02">
    <meta name="format-detection" content="telephone=no">
    <title>test</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- end font -->
    <!-- style -->
    <link rel="stylesheet" href="<?= isset($headCSS) ? resource('css', $headCSS) : '' ?>" />
    <?= resources('js', ['test.css', 'test2.css']) ?>
    <!-- end style -->
</head>

<body class="page">
    <header class="page__top">
        <!-- header start here -->
        <nav></nav>
        <!-- header end here -->
    </header>
    <main class="page__center">
        <!-- content start here -->