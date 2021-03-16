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
    <div>
        Year:<br>
        <select  id="year"></select><br>
        Movie Name: <br>
        <select  id="movie"></select><br>
    </div>
    <script>
        var jsonEx = <?php echo $jsonfile ?>;
        doc = document.getElementById("movie");
        for (var i = 0; i < jsonEx.lenght; i++) {
            var option = document.createElement("option");
            option.text(jsonEx[i].titel);
            doc.add(option);
        }   
        function compare_data(dat, data) {
            result = 0;
            for(i=0;i<dat.length;i++){
                if(dat[i]==data) {
                    result =1;
                    break;    
                }
            }
            if(dat.length==0 || result==1){
                dat.push(data);
            }
            return dat;
        }
    </script>
    <div id="output"></div>
</body>
</html>