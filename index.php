
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="App">
      <h1>
          {{title}}
    </h1>
     <div class="container">
        <div class="col" v-for='disc in discs'>
            <div>{{ disc.name }}</div>
            <div>{{ disc.artist }}</div>
            <div>{{ disc.year }}</div>
            
        </div>
     </div>
        
    </div>
    
    
    
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- main -->
   <script src="main.js"></script>
</body>
</html>