<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Админ-панель</title>

    <!-- Bootstrap core CSS -->
    <link href="/admin/Assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/admin/Assets/css/dashboard.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="/admin/Assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/admin/Assets/css/serch.css">
    <link rel="stylesheet" type="text/css" href="/admin/Assets/css/container.css">
    <link rel="stylesheet" type="text/css" href="/admin/Assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/admin/Assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/admin/Assets/css/post.css">
    <link rel="stylesheet" type="text/css" href="/admin/Assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="/admin/Assets/css/content.css">
    <link rel="stylesheet" type="text/css" href="/admin/Assets/css/author.css">
    <link rel="stylesheet" type="text/css" href="/admin/Assets/css/main.css">

    <!-- simplelineicons for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

    <!-- Redactor CSS -->
    <link rel="stylesheet" href="/admin/Assets/js/plugins/redactor/redactor.css">
</head>
<body>
  
<header>
    <nav class="navbar navbar-toggleable-md navbar-light header-top">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/admin/">Admin Developer CMS</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                <?php foreach (Customize::getInstance()->getAdminMenuItems() as $key => $item): ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= $item['urlPath'] ?>">
                            <i class="<?= $item['classIcon'] ?>"></i>
                            <?= $item['title'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>

            <div class="right-toolbar">
                <a href="/admin/logout/">
                    <i class="icon-logout icons"></i> Logout
                </a>
            </div>
        </div>
    </nav>
</header>