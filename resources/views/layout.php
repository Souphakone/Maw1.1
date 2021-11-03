<?php
if (!isset($headerClass)) {
    $headerClass = "dashboard"; // default style
}

if (!isset($headerText)) {
    $headerText = "";
}
var_dump( dirname(__DIR__));
?>

<!DOCTYPE html>

<html>

<head>
    <title>ExerciseLooper</title>
    <!-- Milligram v1.4.1  -->
    <link rel="stylesheet" href="/css/milligram.min.css">
    <!-- normalize.css v8.0.1 -->
    <link rel="stylesheet" href="/css/normalize.css">
    <!-- Font Awesome Free 5.15.4 -->
    <link rel="stylesheet" href="/css/all.min.css">

    <!-- Font Awesome Free 5.15.4 js -->
    <script src="/../node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>
    
    <!-- Looper css -->
    <link rel="stylesheet" href="/css/looper.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="/js/main.js"></script>
</head>

<body>
    <header class="<?= $headerClass; ?>">
        <section class="container">
            <a href="/"><img src="/img/logo.png" /></a>
            <span class='exercise-label'><?= $headerText ?></span>

        </section>
    </header>
    </br>
    </br>
    <div class="container dashboard">
        <?= $content ?>
    </div>

</body>

</html>