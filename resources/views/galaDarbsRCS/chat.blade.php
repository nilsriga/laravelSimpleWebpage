@extends('masterRCS')

@section('title', 'Chat')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<br>
<div id="app" class="container">
    <div class="row chat-container animated-container z-depth-2">
        <div class="chat-window">
            <div class="messages" style="overflow-y: scroll; height:500px" >
                <ul>
                    @foreach($messages as $message)

                    <li><h6>{{$message->user->name}} writes: {{$message->title}}</h6></li>
                    <ul>
                        <li><h6>{{$message->content}}</h6></li>
                        <li><p>{{$message->created_at->diffForHumans()}}</p></li>
                    </ul>
                    <div class="divider"></div>

                    @endforeach

                </ul>
            </div>
        </div>

        @if(auth()->check())
        <br>
        <form method="POST" action="/chat">
            {{ csrf_field() }}
            <label for="title">Title</label>
            <input type="text" name="title" autofocus>
            <label for="content">Content</label>
            <input type="text" name="content">
            <button type="submit" class="btn red">Submit</button>
        </form>
        @endif

    </div>
</div>

@endsection

@section('messagesScript')


@endsection