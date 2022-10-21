
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="/css/style.css">
    <title>Animal detail info</title>
</head>
<body>
    <div class="animal_card">

@include ('common/nav')
@foreach($animals as $animal)
    <h1> Patient Details </h1> <br>
    <h2> Patient No: {{$animal->id}} </h1><br>
    <img src="/images/pets/{{$animal->image->path}}" alt="image of a dog"><br>
    <p> Patient Name: {{$animal->name}} </p><br>
    <p> Patient Species: {{$animal->species}} </p><br>
    <p> Patient Breed: {{$animal->breed}}</p><br>
    <p> Patient Age: {{$animal->age}} </p><br>
    <p> Patient Weight: {{$animal->weight}} </p><br>
    <h2> Owner Details </h2>
        <div class="owner_details">
    Owner Name: <a href="{{route("owner.detail",$animal->owner->id)}}">{{$animal->owner->first_name}} {{$animal->owner->surname}} </a>
    <p> Owner contact details: Email: {{$animal->owner->email}}<br>
       <br> Phone: {{$animal->owner->phone}}<br>
        <br>Address: {{$animal->owner->Address}}
@endforeach

       <br> <a href="{{route("animal.form",$animal->id)}}"><button>UPDATE</button></a>

@if($animal->id)
  <form action="{{route('animal.delete', $animal->id)}}" method="post">
    @csrf
    @method('DELETE')
  <br>  <button type="submit">DELETE POOR ANIMAL</button>
  </form>
  @endif
    
</body>
</html>
