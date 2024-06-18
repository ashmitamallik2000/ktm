@extends('layout.master')
@section('content')




    <table class="table border border-dark my-3 ">
        <thead>
            <tr>
                <th class="border border-dark" scope="col ">S.No</th>
                <th class="border border-dark" scope="col">Title</th>
                <th class="border border-dark" scope="col">Title_en</th>
                <th class="border border-dark" scope="col">Url</th>
                
            </tr>
            @foreach ($links as $link)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td class="border border-dark">{{ $link->title }}</td>
                <td class="border border-dark">{{ $link->title_en }}</td>
                <td class="border border-dark">{{$link->Url}}</td>
               
            </tr>

            @endforeach

        </thead>

    </table>


@endsection