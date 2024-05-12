@extends('layouts.layout')

@section('title')@parent:: Send mail @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">

        <form method="post" action="/send">

            @csrf

            <div class="form-group">
                <label for="name">Your name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="text">Your message</label>
                <textarea name="text" class="form-control" id="text" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>

        </form>

    </div>
@endsection
