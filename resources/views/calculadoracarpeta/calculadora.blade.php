<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1 class='h1center'>Calculadora</h1>
            <div class="container">
                <div class='section'>
                    <h1 id="resultado"> </h1>
                    {{-- <h1>Resultado: </h1> --}}
                </div>

            </div>

            <div class="container">
                <div class="section"> <button id="btn1" >1</button></div>
                <div class="section"><button id="btn2" >2</button></div>
                <div class="section"><button id="btn3" >3</button></div>
                <div class="section"><button id="btn4" >0</button></div>
            </div>
            <div class="container">
                <div class="section"><button id="btn5">4</button></div>
                <div class="section"><button id="btn6" >5</button></div>
                <div class="section"><button id="btn7" >6</button></div>
                <div class="section"><button id="btn8" >+</button></div>
            </div>
            <div class="container">
                <div class="section"><button id="btn9" >7</button></div>
                <div class="section"><button id="btn10" >8</button></div>
                <div class="section"><button id="btn11" >9</button></div>
                <div class="section"><button id="btn12" >-</button></div>
            </div>
            <div class="container">
                <div class="section"><button id="btn13">Enter</button></div>
                <div class="section"><button id="btn14">Borrar</button></div>
                <div class="section"><button id="btn15">*</button></div>
                <div class="section"><button id="btn16">/</button></div>
            </div>
            <script src="{{ asset('js/calculadora.js') }}"></script>
</body>
</html>