<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body>
    <div class="container">
        <div class="content">
            <img src="icon.png" alt="">
            <h1>Love Calculator</h1>
            <div class="inputarea">
                <input type="text" placeholder="Your Name" id="NameOne" onfocus="this.value = ''">
                <input type="text" placeholder="Your Lover" id="NameTwo" onfocus="this.value = ''">
            </div>
            <a href="#" onclick="love()">Calculate</a>
            <p id="print">Your relationship result here</p>
            <p id="statement"></p>
        </div>
    </div>
    <script>
        function love(){
        var name1 = document.getElementById("NameOne").value;
        var name2 = document.getElementById("NameTwo").value;
        if(name1.length<=2){
            alert("Enter at least 3 character");
        }
        if(name2.length<=2){
            alert("Enter at least 3 character");
        }
        else{
            var random = Math.floor(Math.random()*100);
            document.getElementById("print").innerHTML = name1 + " and " + name2 + "=" +random + "%" + "of love";
        }
        if(random<=10 || random<=50){
            document.getElementById("statement").innerHTML = "Good Relationship";
        }
        else if(random<=51 || random<=100){
            document.getElementById("statement").innerHTML = "Lovely Relationship";
        }
    }
    </script>
</body>
</html>