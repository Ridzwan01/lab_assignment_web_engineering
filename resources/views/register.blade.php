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
            <a class="w3-bar-item w3-button w3-right" href="{{ url('login') }}">
                login
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
                            <label for="email">Name</label>
                                <p>
                                    <input id = "email" class = "w3-input w3-round w3-border" type = "name" name = "name" required>
                                </p>
                                @if ($errors->has('name'))
                                <span class = "w3-red">{{ $errors->first('name') }}</span>
                                @endif
                            <label for="email">Email</label>
                                <p>
                                    <input id = "email" class = "w3-input w3-round w3-border" type = "email" name = "email" required>
                                </p>
                                @if ($errors->has('email'))
                                <span class = "w3-red">{{ $errors->first('email') }}</span>
                                @endif
                            <label for="phone">Phone Number</label>
                                <p>
                                    <input id = "phone" class = "w3-input w3-round w3-border" type = "tel" name = "phone" required>
                                </p>
                                @if ($errors->has('phone'))
                                <span class = "w3-red">{{ $errors->first('phone') }}</span>
                                @endif
                            <label for="address">Mailing Address</label>
                                <p>
                                    <textarea id = "address" class = "w3-input w3-round w3-border" type = "text" name = "address" required></textarea>
                                </p>
                                @if ($errors->has('address'))
                                <span class = "w3-red">{{ $errors->first('address') }}</span>
                                @endif
                            <label for="state">State</label>
                                <p>
                                    <select name="state" id="state">
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Indonesia">Indonesia</option>
                                    </select>
                                </p>
                                @if ($errors->has('state'))
                                <span class = "w3-red">{{ $errors->first('state') }}</span>
                                @endif
                            <label for="pass">Password</label>
                                <p>
                                    <input id = "pass" class = "w3-input w3-round w3-border" type = "password" name = "password" required>
                                </p>
                                @if ($errors->has('password'))
                                <span class = "w3-red">{{ $errors->first('password') }}</span>
                                @endif
                                <div>
                                    <button class="w3-button w3-cyan w3-round">Register</button><br><br><br><br>
                                </div>
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