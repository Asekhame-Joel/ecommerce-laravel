@props(['messages'])

@if ($messages)
    <span @foreach ((array) $messages as $message)>
        <li style="list-style-type: none" class="text-danger">{{ $message }}</li>
    @endforeach
    </span>
@endif