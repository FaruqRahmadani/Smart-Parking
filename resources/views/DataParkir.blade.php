@extends('layouts.Master')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="row padding-10">
        <form action="{{ Route('Filter-Data-Parkir') }}" method="post">
          {{ csrf_field() }}
          <div class="col-md-2 text-center text-center">
            <label>Tanggal Awal</label>
            <input type="date" name="tanggalawal" value="{{ isset($request) ? $request->tanggalawal : Waktu::TanggalNow() }}" class="form-control form-control-h34px">
          </div>
          <div class="col-md-2 text-center">
            <label>Tanggal Akhir</label>
            <input type="date" name="tanggalakhir" value="{{ isset($request) ? $request->tanggalakhir : Waktu::TanggalNow() }}" class="form-control form-control-h34px">
          </div>
          <div class="col-md-2 text-center">
            <label>Nomor Parkir</label>
            <select class="form-control" name="nomorparkir">
              <option value="01012011">Semua</option>
              @for ($i=1; $i <= $MaxParkir; $i++)
                <option value="{{ $i }}" {{ isset($request) && $request->nomorparkir == $i ? 'selected' : '' }}>{{ $i }}</option>
              @endfor
            </select>
          </div>
          <div class="col-md-2 text-center">
            <label>Status Parkir</label>
            <select class="form-control" name="statusparkir">
              <option value="01012011">Semua</option>
              <option value="1" {{ isset($request) && $request->statusparkir == '1' ? 'selected' : '' }}>Berisi</option>
              <option value="0" {{ isset($request) && $request->statusparkir == '0' ? 'selected' : '' }}>Kosong</option>
            </select>
          </div>
          <div class="col-md-2 col-md-offset-1 text-center">
            <button type="submit" class="btn btn-primary" style="margin-top:25px">
              <span class="fa fa-search"></span> | Filter
            </button>
          </div>
        </form>
      </div>
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
@endsection
