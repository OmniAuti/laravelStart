<x-layout>
    <x-slot:heading>
        Edit
    </x-slot:heading>
    <div>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PATCH')
            <input type="text" name="address" id="" required value="{{$post->address}}">
            @error('address')
                <p class="error">{{$message}}</p>
            @enderror
            <input type="number" name="rating" max=4 min=1 required value="{{$post->rating}}">
            @error('number')
                <p class="error">{{$message}}</p>
            @enderror
            <input type="submit" value="Submit">
        </form>
        <button form="delete-form">
            DELETE
        </button>
    </div>
    <form id="delete-form" display="hidden" action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('DELETE')
    </form>
</x-layout>