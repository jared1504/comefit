<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <x-layouts.header_principal />
    <div class="container">
        {{$slot}}
    </div>
    <x-layouts.footer_principal />

</body>

</html>