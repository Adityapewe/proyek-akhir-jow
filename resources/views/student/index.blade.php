@extends('layouts.main')

<?php $no=1 ?>
@section('first.content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th> No </th>
                <th> NRP </th>
                <th> Nama </th>
                <th> Jenis Kelamin </th>
                <th> Tempat Lahir </th>
                <th> Tanggal Lahir </th>
            </tr>
        </thead>
        <tbody>
            @foreach($student as $student)
                <tr>
                    <td> {{$no++}} </td>
                    <td> {{$student->code}} </td>
                    <td> {{$student->name}} </td>
                    <td> {{$student->gender == "P" ? "Pria" : "Wanita"}} </td>
                    <td> {{$student->birth_date}} </td>
                    <td> {{$student->birth_place}} </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

