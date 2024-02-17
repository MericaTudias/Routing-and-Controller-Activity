<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hobbies</title>

    <style>
        body {
            text-align: center;
        }

        h1, p {
            margin: 50px 0;
            font-family: 'Times New Roman', Times, serif;
        } 

        button {
            background-color:white;
            border: 2px solid black;
            color: white;
            padding: 8px 20px;
            display:inline-flexbox;
            font-size: 14px;
        }
    </style>

</head>
<body>
    <h1>Hobbies</h1>
    <p>{{ $data ['Hobbies'] }}.</p>

    <button><a href="/AboutMe/{id}">About Me</a></button>
    <button><a href="/Hobbies/{id}">Hobbies</a></button>
    <button><a href="/Skills/{id}">Skills</a></button>
</body>
</html>