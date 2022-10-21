{{-- 















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1> Patient Details </h1> <br>
    <h2> Patient No: {{$animal->id}} </h1><br>
    <h2>  {{$animal->image->path}} </h2><br>
    <p> Patient Name: {{$animal->name}} </p><br>
    <p> Patient Species: {{$animal->species}} </p><br>
    <p> Patient Breed: {{$animal->breed}}</p><br>
    <p> Patient Age: {{$animal->age}} </p><br>
    <p> Patient Weight: {{$animal->weight}} </p><br>
    <h2> Owner Details </h2>
    <p> Owner Name: {{$animal->owner->first_name}} {{$owner->last_name}} </p>
    <p> Owner contact details: Email: {{$animal->owner->Email}}<br>
        Phone: {{$animal->owner->phone}}<br>
        Address: {{$animal->owner->Address}}
    
</body>
</html> --}}