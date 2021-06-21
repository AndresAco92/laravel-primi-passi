<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>films</title>
</head>
<body>
  <h1>Names</h1>

  <spam>
    <a href="http://127.0.0.1:8000">Home</a>
  </spam>

  <spam>
    <a href="http://127.0.0.1:8000/films">Films</a>
  </spam>

  <spam>
    <a href="http://127.0.0.1:8000/cars">Cars</a>
  </spam>

  <ul>
    @foreach ($nomi as $nome)
      @if($nome === 'Alex')
        <li>
          {{ $nome }}
          farabutto!
        </li>   
      @else
        <li>
          {{ $nome }}
          ti bucco le gomme!!! 
        </li>
      @endif
    @endforeach
  </ul>
</body>
</html>