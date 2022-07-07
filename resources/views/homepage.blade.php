<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>MyTutor</title>
</head>
<body>
    

    <div class="w3-cyan">
        
    <div class="w3-bar">
        <a class="w3-bar-item w3-button" href="{{ url('login') }}">Login</a>
        <a class="w3-bar-item w3-button" href="{{ url('registration') }}">Register</a>
    </div>    
        
    <div id="idsidebar" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium">
        <a href="{{ url('login') }}">Login</a>
        <a href="{{ url('registration') }}">Register</a>
    </div>

        <div class="w3-center w3-padding-large w3-cyan">
            <h3>MyTutor</h3>
        </div>
    </div>

    <div class="w3-center">
        <h2>What is Lorem Ipsum?</h2><br>
        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h4>
    </div>

    <footer class="w3-footer w3-center w3-cyan w3-bottom">
        <p>Mytutor</p>
    </footer> 

</body>
</html>