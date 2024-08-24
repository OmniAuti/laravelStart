<x-layout>
    <x-slot:heading>
        Create
    </x-slot:heading>
    <div>
        <form action="/create" method="post">
            @csrf
            <input type="text" name="address" id="" required>
            @error('address')
                <p class="error">{{$message}}</p>
            @enderror
            <input type="number" name="rating" max=4 min=1 required>
            @error('number')
                <p class="error">{{$message}}</p>
            @enderror
            <input type="submit" value="Submit">
        </form>
    </div>
</x-layout>