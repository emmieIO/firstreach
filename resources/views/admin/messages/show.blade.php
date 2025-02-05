@php
    use Carbon\Carbon;
@endphp
<x-admin-layout>
<div class="card mb-3">
    <div class="card-header">

        <p class="card-title">{{$message->subject}} <i class="fas fa-angle-right fa-fw"></i>{{$message->email}}</p>
    </div>
    <div class="card-body">
        <p>{{$message->message}}</p>
    </div>
    <div class="card-footer">
        <p class="m-0"><small>{{Carbon::parse($message->created_at)->format('M d Y g:ia')}}</small></p>
    </div>
</div>
</x-admin-layout>
