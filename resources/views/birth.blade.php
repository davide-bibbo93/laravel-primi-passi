<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>laravel-primi-passi</title>
</head>
<body>

  <div class="container">

    <h1>Ciao, {{ $name }} {{ $lastname }}, innazitutto auguri!</h1>

    <ul>
      <h4>Nella lista degli invitati, sono presenti :</h4>

      @foreach($guest_list as $guest)
        <li>{{ $guest }}</li>
      @endforeach

    </ul>

    <ul>

      @forelse ($animals as $animal)
        <li>{{ $animal }}</li>
      @empty
        <p>Non sono presenti animali</p>
      @endforelse

    </ul>

  </div>
