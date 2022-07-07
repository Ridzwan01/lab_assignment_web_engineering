<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>

    <style>
        @media screen and (max‐width: 768px) {
            .w3‐container {
                width: 100%;
            }
        }
        @media screen and (min‐width: 768px) {
            .w3‐container {
                width: 700px;
                margin: 0 auto;
            }
        }
    </style>

</head>
<body>
    <div class="w3-container">
        <div class="w3-bar w3-cyan">
            <a class="w3-bar-item w3-button w3-right" href="{{ url('mainpage') }}">
                Main Page
            </a>
        </div>
        <header class="w3-center w3-padding-large w3-cyan">
            <h2>MyTutor</h2>
        </header>
            <div class="w3-padding">
                <div class="w3-card w3-round">
                    <header class="w3-cyan w3-padding">
                        <h3>Registration Form</h3>
                    </header>
                    <div class="w3-padding">
                        <form action="{{ route('register.post') }}" method="post">
                            {{csrf_field()}}
                            <p>
                                <input class="w3-input w3-round w3-border" type="text" name="subjectId" placeholder="Subject Id">
                            </p>
                            <p>
                                <input class="w3-input w3-round w3-border" type="text" name="title" placeholder="Title">
                            </p>
                            <p>
                                <textarea class="w3-input w3-round w3-border" name="description" cols="30" rows="10" placeholder="Description"></textarea>
                            </p>
                            <p>
                                <input class="w3-input w3-round w3-border" type="text" name="price" placeholder="price">
                            </p>
                            <p>
                                <input class="w3-input w3-round w3-border" type="text" name="learninghours" placeholder="Total Learning Hours">
                            </p>
                            <button class="w3-button w3-cyan w3-round" type="submit">Submit</button><br><br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        <footer class="w3-footer w3-center w3-cyan w3-bottom">
            <p>Mytutor</p>
        </footer> 
    </div>
</body>
</html>