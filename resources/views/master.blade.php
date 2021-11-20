<?php
    
$harga = 219000;
$so = 5;
$soh = 6;
$selisih = $so-$soh;
$harga_so = $harga*$so;
$harga_soh = $harga*$soh;
$total = $harga_so-$harga_soh;
?>
@extends('layouts.main')
@section('container')
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th>no</th>
                <th>Site</th>
                <th>artikel</th>
                <th>Descripsi</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>SOH</th>
                <th>SO</th>
                <th>loc.gudang</th>
                <th>loc.display</th>
                <th>Selisih</th>
                <th>Total harga</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($masters as $master)
                <td>{{ $master->id }}</td>
                <td>{{ $master->site }}</td>
                <td>{{ $master->artikel }}</td>
                <td>{{ $master->descripsi }}</td>
                <td>{{ $master->kategori }}</td>
                <td>{{ $master->harga }}</td>
                <td>5</td>
                <td>4</td>
                <td>3</td>
                <td>1</td>
                <td>{{ $selisih }}</td>
                <td>{{ $total }}</td>
                <td>
                    <button type="button" class="btn btn-info btn-sm">show</button>
                    <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                    <button type="button" class="btn btn-danger btn-sm">hapus</button>
                </td>
                @endforeach
            </tr>

        </tbody>
    </table>
@endsection