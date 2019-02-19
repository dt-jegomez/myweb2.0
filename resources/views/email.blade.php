<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje de correo</title>
</head>
<body>
    <p> <strong>Hola! as recibido una notificación atravez de tu pagina web </strong></p>
    <ul>
        <li>Nombre: {{$name}}</li>
        <li>Email: {{$email}}</li>
        <li>Asunto: {{ $subject}}</li>
    </ul>
    <p>
        {{$msg}}
    </p>
</body>
</html>
