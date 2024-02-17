<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>

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

    <h1>Hi there! <br> I am {{ $data ['Name'] }}.</h1>
    <p> I am {{ $data ['Age'] }} years old, a {{ $data ['Year'] }} college student in the {{ $data ['University'] }}, currently taking {{ $data ['Course'] }} Major in {{ $data ['Major'] }}. <br> Here, you can explore and get to know me. Let's connect, collaborate, and create something amazing together!</p>
    
    <button><a href="/AboutMe/{id}">About Me</a></button>
    <button><a href="/Hobbies/{id}">Hobbies</a></button>
    <button><a href="/Skills/{id}">Skills</a></button>

</body>
</html>