<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app">

        <header class="container-fluid p-4 mb-5">
            <div class="col-auto fw-bold text-success h1">Spotify</div>
        </header>
        <main>
            <div class="container">
                <div class="row g-5">
                    <div class="col-4" v-for="(cd, i) in cds">
                        <div class="card text-center text-white">
                            <img :src="cd.poster" class="card-img-top cover" alt="Cd Cover">
                            <div class="card-body">
                                <h5 class="card-title">{{ cd.title }}</h5>
                                <p class="card-text">{{ cd.author }}</p>
                                <h5 class="card-title">{{ cd.year }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <script src="./js/app.js"></script>
</body>
</html>