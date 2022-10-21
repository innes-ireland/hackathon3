 















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach ($animals as $animal)
<ul>
    <li>
    <h1> Patient Details </h1> <br>
    <h2> Patient No: {{$animal->id}} </h1><br>
    <h2>  {{$animal->image->path}} </h2><br>
    <p> Patient Name: {{$animals->name}} </p><br>
    <p> Patient Species: {{$animals->species}} </p><br>
    <p> Patient Breed: {{$animals->breed}}</p><br>
    <p> Patient Age: {{$animals->age}} </p><br>
    <p> Patient Weight: {{$animals->weight}} </p><br>
    <h2> Owner Details </h2>
    <p> Owner Name: {{$animals->owner->first_name}} {{$owner->last_name}} </p>
    <p> Owner contact details: Email: {{$animals->owner->Email}}<br>
        Phone: {{$animals->owner->phone}}<br>
        Address: {{$animals->owner->Address}}
    </li>
    @endforeach
</body>
</html> 