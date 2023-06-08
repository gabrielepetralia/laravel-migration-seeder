<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @vite('resources/js/app.js')
  <title>Laravel Trains</title>
</head>
<body class="bg-dark">
  <div class="container py-5">
    <table class="table table-dark">
      <thead>
        <tr class="text-center">
          <th scope="col">Train Code</th>
          <th scope="col">Departure Station</th>
          <th scope="col">Arrival Station</th>
          <th scope="col">Departure Time</th>
          <th scope="col">Arrival Time</th>
          <th scope="col">Company</th>
          <th scope="col">Train Cars</th>
          <th scope="col">On Time</th>
          <th scope="col">Deleted</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($trains as $train)
        <tr class="text-center">
          <th class="text-danger" scope="row">{{ $train['train_code'] }}</th>
          <td>{{ $train['departure_station'] }}</td>
          <td>{{ $train['arrival_station'] }}</td>
          <td>{{ $train['departure_time'] }}</td>
          <td>{{ $train['arrival_time'] }}</td>
          <td class="text-warning">{{ $train['company'] }}</td>
          <td>{{ $train['num_train_cars'] }}</td>
          <td class="{{$train['on_time'] === 0 ? "text-danger" : "text-success"  }}">{{ $train['on_time'] === 0 ? "No" : "Yes" }}</td>
          <td class="{{$train['deleted'] === 0 ? "text-danger" : "text-success"  }}">{{ $train['deleted'] === 0 ? "No" : "Yes" }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
