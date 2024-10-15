<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet"/>
</head>

<body>
    <div class="container">
        <form action="https://www.google.com/search" method="get" target="_blank" id="search-form">
            <input name="q" type="text" placeholder="Search Google..." autocomplete="off" autofocus>
            <!-- <button type="button"><i class="fas fa-microphone"></i></button> -->
        </form>
        <p class="info"></p>
    </div>
    <script src="js/voice.js"></script>
</body>

</html>