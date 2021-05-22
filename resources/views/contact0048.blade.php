@extends('layout.app')
@section('judul', 'Contact Us')
    
@section('isi')
    <div>
      <style>
        .table, .th, .td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        </style>
      <table class="table">
        <thead>
          <tr>
            <th class="th" colspan="2" style="text-align: center"><h1>Data Diri</h1></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="td">Foto</td>
            <td style="text-align: center"><img src={{url('/images/foto.jpeg')}} alt="image" style="width:80px;height:120px;"></td>
            
          </tr>
          <tr>
            <td class="td">Kontak</td>
            <td class="td">+62 85931033003</td>
          </tr>
          <tr>
            <td class="td">Email</td>
            <td class="td">syafrilian12345@gmail.com</td>
          </tr>
          <tr>
            <td class="td">Sosial Media</td>
            <td class="td">@aril_syafrilian</td>
          </tr>
        </tbody>
      </table>
    </div>
@endsection