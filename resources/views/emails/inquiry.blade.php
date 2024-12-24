@extends('emails.layout', [
    'title' => $subject,
    'userName' => $userName,
    'senderName' => $sender_name
    ])
@section('content')
    <p>{{ $content }}:</p>
@endsection
