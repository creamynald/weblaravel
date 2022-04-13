@extends('layouts.main')

@section('container')
<h4>Agenda Kegiatan</h4>
<div class="table-responsive col-lg-8">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Agenda</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Tindakan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Rapat Koordinasi Sensus Penduduk 2022</td>
            <td>Rabu, 20 Juni 2022</td>
            <td><button href="#" class="badge bg-danger"><span data-feather="eye"></span> Detail</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Penutupan MTQ Tingkat Kelurahan Duri Timur</td>
            <td>Selasa, 11 Februari 2022</td>
            <td><button href="#" class="badge bg-danger"><span data-feather="eye"></span> Detail</button></td>
          </tr>
        </tbody>
      </table>
</div>
@endsection