@extends('layouts.app')

@section('content')
    <h1>Contacts</h1>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="contact/submit" method="post">

        <div class="group">
            <label for="name">Enter name</label>
            <input type="text" name="name" placeholder="Enter name" id="name">
        </div>

        <div class="group">
            <label for="email">Enter email</label>
            <input type="text" name="email" placeholder="Enter email" id="email">
        </div>

        <button type="submit" class="btn">SENT</button>
    </form>


@endsection
