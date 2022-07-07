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
    <div class="w3-container">
        <div class="w3-bar w3-cyan">
            <a class="w3-bar-item w3-button w3-right" href="{{route('logout')}}">logout</a>
        </div>
        <header class="w3-center w3-padding-large w3-cyan">
            <h2>MyTutor</h2>
        </header>
        <div>
        <a class="w3-bar-item w3-button w3-right" href="{{ url('subjectregister') }}">
                Register Subject
            </a>
        </div>
        <div class="w3-padding">
            <table class="w3-table w3-striped w3-bordered">
                <thead>
                    <th>Subject Id</th><th>Title</th><th>Description</th><th>Total Learning Hours</th>
                </thead>
            </table>
        </div>
        <footer class="w3-footer w3-center w3-cyan w3-bottom">
            <p>Mytutor</p>
        </footer> 
    </div>
    <div id="newsubject" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-round" style="width:500px">
            <header class="w3-row w3-cyan">
                <span onclick="document.etElementById('newsubject').style.display='none'"
                class="w3-button w3-display-topright w3-small">&times;</span>
                <h4 class="w3-margin-left">New Subject Form</h4>
            </header>
        </div>
    </div>
</body>
</html>