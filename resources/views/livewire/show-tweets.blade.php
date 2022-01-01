<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <p>{{ $msg }}</p>

    <input type="text" name="msg" id="msg" wire:model="msg"> 
    <br>
    <hr>
    @foreach ($tweets as $tweet)
        <p>{{ $tweet->msg }}</p>
        <p>{{ $tweet->user->name }} - {{ $tweet->tweet}} </p>
        
    @endforeach
