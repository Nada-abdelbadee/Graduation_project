@extends('layouts.admin')

@section('content')
<h1 class="text-center mt-5">({{$user->name}}) Information</h1>

<div class="row show ms-5">
    <div class="col">
        <p><span>UserName:</span> {{$user->name}}</p>
        <p><span>User Email:</span> {{$user->email}}</p>
        <p><span>created_at:</span> {{$user->created_at}}</p>
        <p><span>Role_id:</span> {{$user->role_id}}</p>
    </div>
    <div class="col">
        
    </div>
</div>



@endsection