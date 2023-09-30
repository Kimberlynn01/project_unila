@extends('layout.main')


@section('main')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif

<h2>Settings</h2>
<div class="d-flex mt-5 justify-content-center align-items-center">
    <form action="{{ route('dosen.editpassword', $user->id) }}" method="post" class="bg-white w-100 shadow-sm rounded-5" style="border-radius: 10px;">
        @csrf
    <div class="modal-header bg-light">
        <div class="modal-title">
            <h2>General</h2>
        </div>
    </div>
    <div class="modal-body">
        <label for="username">Username</label>
        <br>
        <input type="text" name="username" class="w-50 " style="border: solid 1px; color: rgba(60, 60, 60, 0.704); border-radius: 5px; height: 30px" placeholder="Username" value="{{ $user->username }}">
        <br>
        <label for="email" class="mt-2">Email</label>
        <br>
        <input type="email" class="w-50" name="email" id="email" placeholder="Email" placeholder="Email" value="{{ $user->email }}" style="border: solid 1px; color: rgba(60, 60, 60, 0.704); border-radius: 5px; height: 30px">
        <br>
        <label for="password" class="mt-2">Password</label>
        <br>
        <input type="text" class="w-50 " style="border: solid 1px; color: rgba(60, 60, 60, 0.704); border-radius: 5px; height: 30px" name="password" placeholder="Password" value>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    </form>
</div>

@endsection
