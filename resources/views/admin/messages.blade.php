@extends('layouts.app')

@section('title', 'All Messages')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">All Messages</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Sent At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $message)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->subject }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->created_at->format('d M Y H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No messages yet.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
