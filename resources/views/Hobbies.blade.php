<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hobbies</title>
</head>
<body>
    <button><a href="/AboutMe/{id}">About Me</a></button>
    <button><a href="/Hobbies/{id}">Hobbies</a></button>
    <button><a href="/Skills/{id}">Skills</a></button>

    <style>
        button {
            background-color:white;
            border: 2px solid black;
            color: white;
            padding: 8px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
        }
    </style>

    <h1 style="text-align: center;margin: 50px 0;">Hobbies</h1>
    @dd($data);
</body>
</html>