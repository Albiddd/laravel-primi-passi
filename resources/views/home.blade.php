<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            margin: 0 auto;
            max-width: 1000px;
            padding: 2rem;
        }
        .title{
            text-align: center;
        }
        ul{
            margin: 5px 16px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1 class="title">HelloWorld</h1>
        
        <h3>Elenco Studenti:</h3>
        <ul>
            @foreach ($students as $student)
                <li>
                    {{ $student }}
                </li>

            @endforeach
        </p>

    </div>

    


</body>
</html>