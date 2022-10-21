
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
@foreach($owners as $owner)
    <p> Owner Name: {{$owner->first_name}} {{$owner->surname}} </p>
    <p> Owner contact details: Email: {{$owner->email}}<br>
        Phone: {{$owner->phone}}<br>
        Address: {{$owner->Address}}
      <h3>Animals</h3>
        @foreach($owner->animals as $animal)
        <a href="{{route("animal.detail",$animal->id)}}">{{$animal->name}}</a>
        @endforeach
@endforeach
</body>
</html>