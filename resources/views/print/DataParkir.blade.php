<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .table{
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    .table > * > * > *{
      border: 1px solid #000000;
      padding: 8px;
    }
    .text-center{
      text-align: center;
    }
  </style>
  <title>Print Data Parkir</title>
</head>
<body>
  <div class="text-center">
    <h1>Laporan Data Parkir</h1>
  </div>
  <hr style="margin-bottom: 15px">
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th class="text-center">#</th>
        <th class="text-center">Nomor Parkir</th>
        <th class="text-center">Status</th>
        <th class="text-center">Tanggal</th>
        <th class="text-center">Waktu</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($Parkir as $Index => $DataParkir)
        <tr>
          <td class="text-center"> {{ $Index+1 }} </td>
          <td class="text-center"> {{ $DataParkir->parkir_id }} </td>
          <td> {{ $DataParkir->status ? 'Berisi' : 'Kosong' }} </td>
          <td> {{ Waktu::Tanggal($DataParkir->created_at) }} </td>
          <td> {{ Waktu::Jam($DataParkir->created_at) }} </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
