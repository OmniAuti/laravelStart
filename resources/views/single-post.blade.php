<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
<div class="post--container">
    {{$post->address}}
</div>
    <a href="/posts/{{$post->id}}/edit">Edit</a>
</x-layout>