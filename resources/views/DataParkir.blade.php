@extends('layouts.Master')
@section('content')
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Data Parkir</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table id="table_id" class="table table-striped table-advance table-bordered">
          <thead>
            <tr>
              <th class="text-center"> No </th>
              <th class="text-center"> Nomor Parkir </th>
              <th class="text-center"> Status </th>
              <th class="text-center"> Tanggal </th>
              <th class="text-center"> Waktu </th>
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
      </div>
    </div>
  </div>
@endsection
