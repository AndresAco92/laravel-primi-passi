<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>films</title>
</head>
<body>

  <h1>Films</h1>

  <spam>
    <a href="http://127.0.0.1:8000">Home</a>
  </spam>

  <spam>
    <a href="http://127.0.0.1:8000/names">Names</a>
  </spam>

  <spam>
    <a href="http://127.0.0.1:8000/cars">Cars</a>
  </spam>

  <ul>
    @foreach ($genres as $film)
      @foreach ($film as $titles)

      <li>
        {{$titles}}
      </li>

      @endforeach
    @endforeach
  </ul>
  
</body>
</html>

<style>
  
</style>