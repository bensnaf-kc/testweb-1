<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $jsonfile = file_get_contents("movies.json");
    ?>
    <select name="year_movie" id="year_movie" onchange="sltM()"></select>

    <script>
        var str = "";
        var jsonEx = <?php echo $jsonfile ?>;
        for (var i = 0; i < 500; i++) {
            console.log(jsonEx[i].title + jsonEx[i].year);
            document.getElementById("year_movie").innerHTML += "<option value=''>" + jsonEx[i].year + " : " + jsonEx[i].title + "</option>";
        }
        function sltM(){
           
        }
        
    </script>
    <div id="output"></div>
</body>

</html>