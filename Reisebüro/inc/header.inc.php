<?php

// if(!isset($pageTitle)){
//     $pageTitle = "empty"
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles/simple.css">
    <?php if (!empty($pageTitle)) : ?>
        <title>
            <?php echo $pageTitle; ?>
        </title>
    <?php else : ?>
        <title>Das moderne Reisebüro</title>
    <?php endif; ?>

    <style>
        a.active {
            background-color: var(--accent);
            border: 1px solid var(--accent);
            color: white !important;
        }

        a.active:hover {
            color: white !important;
            background-color: black;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <header>
        <h1>Das moderne Reisebüro</h1>

        <nav>
            <?php
            /* <?php if (!empty($page) && $page === "index") : ?>
                <a class="active" href="./">Startseite</a>
            <?php else : ?>
                <a href="./">Startseite</a>
            <?php endif; ?> */
            ?>

            <?php if (!isset($page)) $page = ""; ?>
            <a href="./" <?php if ($page === "index") : ?> class="active" <?php endif;  ?>>Startseite</a>
            <a href="./" <?php if ($page === "index") : ?> class="active" <?php endif;  ?>>Helsinki</a>

        </nav>
    </header>

    <main>
        <?php if (!empty($pageTitle)) : ?>
            <h2><?php echo $pageTitle; ?></h2>
        <?php endif; ?>
        <?php

        // if(!isset($pageTitle)){
        //     $pageTitle = "empty"
        // }

        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" type="text/css" href="./styles/simple.css">
            <?php if (!empty($pageTitle)) : ?>
                <title>
                    <?php echo $pageTitle; ?>
                </title>
            <?php else : ?>
                <title>Das moderne Reisebüro</title>
            <?php endif; ?>

            <style>
                a.active {
                    background-color: var(--accent);
                    border: 1px solid var(--accent);
                    color: white !important;
                }

                a.active:hover {
                    color: white !important;
                    background-color: black;
                    border: 1px solid black;
                }
            </style>
        </head>

        <body>
            <header>
                <h1>Das moderne Reisebüro</h1>

                <nav>

                    <?php if (!isset($page)) $page = ""; ?>
                    <a href="./" <?php if ($page === "index") : ?> class="active" <?php endif;  ?>>Startseite</a>
                    <a href="./" <?php if ($page === "helsinki") : ?> class="active" <?php endif;  ?>>Helsinki</a>
                    <a href="./" <?php if ($page === "mallorca") : ?> class="active" <?php endif;  ?>>Mallorca</a>

                </nav>
            </header>

            <main>
                <?php if (!empty($pageTitle)) : ?>
                    <h2><?php echo $pageTitle; ?></h2>
                <?php endif; ?>