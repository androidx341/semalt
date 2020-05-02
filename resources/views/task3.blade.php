@extends('layout')

@section('content')
    <div>
        <h5 class="mt-5">Реализовать алгоритм  извлечения числовых значений со строки:
            This server has 386 GB RAM and 500GB storage
        </h5>
        <code>
            $inputString = 'This server has 386 GB RAM and 500GB storage'; <br>
            preg_match_all('/\d+/', $inputString, $digits);
        </code>

        <ul>
        @foreach ($digits as $digit)
            <li>{{ $digit }}</li>
        @endforeach
        </ul>
    </div>
@endsection
