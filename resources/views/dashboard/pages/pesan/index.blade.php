@extends('dashboard.components.main')

@section('content')
<div class="flex-1 px-2 md:px-3 mt-14  md:mt-0 bg-indigo-50 min-h-screen pt-2">
    @include('dashboard.components.navbar')
    <div>
        @livewire('list-conversation-and-messages')
       
    </div>
</div>  
@endsection