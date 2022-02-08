@extends('layouts.main')

@section('leftcontent')
<head>
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
</head>

<div class="left_content">
    <table class="data_contenet">
        <tr>
            <th colspan="3">2月7日（月）</th>
        </tr>
        <tr>
            <td align="center">摂取カロリー目安</td>
            <td></td>
            <td align="center"><span>900kcal</span></td>
        </tr>
        <tr>
            <td align="center">運動</td>
            <td align="center">消費カロリー</td>
            <td align="center"><span>900kcal</span></td>
        </tr>
        <tr>
            <td align="center">食事</td>
            <td align="center">朝</td>
            <td align="center"><span>300kcal</span></td>
        </tr>
        <tr>
            <td></td>
            <td align="center">昼</td>
            <td align="center"><span>300kcal</span></td>
        </tr>
        <tr>
            <td></td>
            <td align="center">夜</td>
            <td align="center"><span>300kcal</span></td>
        </tr>
        <tr>
            <td></td>
            <td align="center">残り</td>
            <td align="center"><span>300kcal</span></td>
        </tr>
        <tr>
            <td align="center">体重</td>
            <td></td>
            <td align="center"><span>60kg</span></td>
        </tr>
        <tr>
            <td align="center">疲労度</td>
            <td></td>
            <td align="center"><span>○</span></td>
        </tr>
    </table>
</div>
@endsection
