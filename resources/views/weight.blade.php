@extends('layouts.main')

@section('content')
<head>
    <link href="{{ asset('css/weight.css') }}" rel="stylesheet">
</head>
<div>
    <table>
        <form action="/top" method="POST">
            @csrf
            <tr>
                <td>日付</td>
                <td><input type="date">
            </tr>
            <tr>
                <td>時間</td>
                <td>
                    <select name="example">
                        <option value="朝">朝</option>
                        <option value="昼">昼</option>
                        <option value="夜">夜</option>
                        <option value="おやつ">おやつ</option>
                    </select>
                </td>
            </tr>
        </form>
    </table>
</div>
@endsection
