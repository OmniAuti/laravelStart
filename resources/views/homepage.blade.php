<x-layout>
    <h1>Home</h1>
    <div>
        @foreach ($posts as $post)
            <p>{{$post['address']}}</p>
        @endforeach
    </div>
</x-layout>
