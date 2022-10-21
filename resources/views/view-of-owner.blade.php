
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owner detail info</title>
</head>
<body>

@include ('common/nav')
@foreach($animals as $animal)


    <p> Owner Name: {{$animal->owner->first_name}} {{$animal->owner->surname}} </p>
    <p> Owner contact details: Email: {{$animal->owner->email}}<br>
        Phone: {{$animal->owner->phone}}<br>
        Address: {{$animal->owner->Address}}
@endforeach
    
</body>
</html>