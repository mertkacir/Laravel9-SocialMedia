@extends('layouts.frontbase')

@section('title','Users')
@section('content')
    <div class="container" style="flex-direction: row;">
        <div class="col-sm-12">
            @foreach ($users as $user)
                <div class="col-sm-3 text-center" style="padding: 15px;">
                    <div style="box-shadow: 0 0 10px 1px grey; padding: 20px;">
                        <img src="{{ $user->profile_picture }}" alt="Profile Picture" width="50" height="50">
                        {{ $user->name }}<br />
                        <a href="{{ route('user.show', $user->id) }}">View User</a>
                    </div>
                </div>
            @endforeach
            <div class="col-sm-12">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
