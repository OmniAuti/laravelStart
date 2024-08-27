<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
<div class="post--container">
    {{$post->address}}
</div>
<a href="/post/{{$post->id}}/edit">Edit</a>
</x-layout>