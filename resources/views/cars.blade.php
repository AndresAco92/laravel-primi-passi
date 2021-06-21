<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cars</title>
</head>
<body>

  <h1>Cars</h1>

  <spam>
    <a href="http://127.0.0.1:8000">home</a>
  </spam>

  <spam>
    <a href="http://127.0.0.1:8000/films">Films</a>
  </spam>

  <spam>
    <a href="http://127.0.0.1:8000/names">Names</a>
  </spam>

  <ul>
    @foreach ($cars as $car)
      @foreach ($car as $machine)

      <li>
        {{ $machine }}
      </li>

      @endforeach
    @endforeach
  </ul>
  
</body>
</html>