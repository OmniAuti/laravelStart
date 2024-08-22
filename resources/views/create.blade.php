<x-layout>
    <x-slot:heading>
        Create
    </x-slot:heading>
    <div>
        <form action="/create" method="post">
            @csrf
            <input type="text" name="address" id="">
            <input type="number" name="rating" max=4 min=1>
            <input type="submit" value="Submit">
        </form>
    </div>
</x-layout>