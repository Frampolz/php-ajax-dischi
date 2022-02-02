<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
         <div class="album-container">
            <div v-for="(album, index) in albums" class="album-box">
                <div class="album-cover">
                    <img :src="album.poster" :alt="album.title" />
                </div>
                <div class="album-details">
                    <h2> {{album.title}} </h2>
                    <h3>{{ album.author }}</h3>
                    <h4>{{ album.year }}</h4>
                </div>
            </div>
        </div> 
        
    </div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>