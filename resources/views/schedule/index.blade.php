@extends('layouts.app')

@section('content')
    <div class="container">

        @if(\Session::has('success'))
            <div class="alert alert-success">
                {{\Session::get('success')}}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
            <tr>
                <td>Id</td>
                <td>Quem</td>
                <td>Local</td>
                <td>Quando</td>
            </tr>
            </thead>
            <tbody>
            @foreach($schedules as $schedule)
                <tr>
                    <td>{{$schedule->id}}</td>
                    <td>{{$schedule->user->name}}</td>
                    <td>{{$schedule->local}}</td>
                    <td>{{$schedule->go_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="row">
            <a href="{{url('/schedule/create')}}" class="btn btn-success">Novo agendamento</a>
        </div>

    </div>
@endsection