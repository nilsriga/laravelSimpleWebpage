@extends('masterRCS')

@section('title', 'Chat')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<br>
<div id="app" class="container">
    <div class="row chat-container animated-container z-depth-2">
        <div class="chat-window z-depth-2">
            <div class="messages">
                <ul>
                    <li ><h6>@{{(newMessage.userName) ? "User: " + newMessage.userName : ""}}</h6></li>
                    <li ><h6>@{{(newMessage.messageText) ? "Writes: " + newMessage.messageText : ""}}</h6></li>
                </ul>
            </div>
        </div>
        <label for="username-field">User Name</label>
        <input v-model="currentMessage.userName" type="text" name="username-field">
        <label for="message-field">Message</label>
        <input v-model="currentMessage.messageText" type="text" name="message-field">
        <button v-on:click='addMessage()' class="z-depth-2 submit-button waves-effect waves-light red btn right" type="submit">Submit</button>
    </div>
</div>

@endsection

@section('messagesScript')

<script>

var a = new Vue({
   el: '#app',
   data: {
       currentMessage: [
           {
               userName: "",
               messageText: "",
           }
       ],
       newMessage: [
           {
               userName: "",
               messageText: "",
           }
       ]
   },
   methods: {
       addMessage: function () {
           this.newMessage.push(currentMessage);
           this.currentMessage.userName = "";
           this.currentMessage.messageText = "";

       }
   } 
});
</script>

@endsection