@extends('layout')

@section('content')
    <div>
        <h5 class="mt-5">Нужно поменять 2 переменные местами без использования третьей:
            $а = [1,2,3,4,5];
            $b = ‘Hello world’;
        </h5>
        <code>
            $а = [1,2,3,4,5]; <br>
            $b = 'Hello world'; <br>

            $a[] = $b; <br>
            $b = $a; <br>
            $a = array_pop($b); <br>
        </code>
        <ul>
            <li>A: @json($a) </li>
            <li>B: @json($b) </li>
        </ul>
    </div>
@endsection
