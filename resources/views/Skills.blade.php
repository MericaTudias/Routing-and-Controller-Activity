<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills</title>

    <style>
        body {
            text-align: center;
        }

        h1, ul {
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

    <h1>Skills</h1>
        <p><strong>Knowledgeable</strong> in programming language: {{ $data ['Programming Language'] }} (eme)<br>
        <strong>Knowledgeable</strong> in prototyping low and high fidelity mock up<br>
        <strong>Knowledgeable</strong> in designing {{ $data ['Designing'] }}<br>
        Identifies what is needed to be done and ensures quality in every accomplished and given tasks.<br>
        Active listener and actively engages especially during team discussions.<br>
        Adaptable and flexible in any work environment.</p><br>

    <button><a href="/AboutMe/{id}">About Me</a></button>
    <button><a href="/Hobbies/{id}">Hobbies</a></button>
    <button><a href="/Skills/{id}">Skills</a></button>
</body>
</html>