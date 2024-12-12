<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{
         background-color: silver;
       }

        div{
            text-align: center;
            padding: 5%;
            
        }

        form{
            background-color: orange;
            width: 300px;
            height: 240px;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            
        }

        input[type='number']{
            margin: auto;
            text-align: center;
            border-right: 12px;
            border-radius: 4px;
            height: 30px;
        }

       button{
         background-color: blue;
         color: white;
         cursor: pointer;
       } 
      button:hover{
        background-color: red;
      }

      p{
        font-family: Arial, Helvetica, sans-serif;
        font: 200;
      }
       
    </style>
</head>
<body>
    <div>
        <form action="main.php" method="post">
            <p>Média Aritmética</p>
        <input type="number" id="nota1" name="nota1" required> <br><br>

        <input type="number" id="nota2" name="nota2" required> <br><br>

        <input type="number" id="nota3" name="nota3" required> <br><br>

        

        <button onclick="calcular()">Calcular</button>
    </form>
    </div>
    
    <script>

       function calcular(){

        // "pegar o id da tag html"
        var n1 = document.getElementById('nota1').value;
        var n2 = document.getElementById('nota2').value;
        var n3 = document.getElementById('nota3').value;
        
    
        // parseFloat serve
        var media = (parseFloat(n1) + parseFloat(n2) + parseFloat(n3)) / 3;
    
        window.alert('A media é: ' + media);


       } 
       
    
    </script>
</body>
</html>