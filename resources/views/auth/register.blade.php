<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <div>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" id="" :value="old('name')" required>
            @error('name')
                <p class="error">{{$message}}</p>
            @enderror
            <br>
            <input type="email" name="email" required>
            @error('email')
                <p class="error">{{$message}}</p>
            @enderror
            <br>
            <input type="password" name="password" required>
            <input type="submit" value="Register">
        </form>
    </div>
</x-layout>