<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
    <div>
        <form action="/login" method="post">
            @csrf
            <input type="email" name="email" required>
            @error('email')
                <p class="error">{{$message}}</p>
            @enderror
            <input type="password" name="password" required>
            @error('password')
                <p class="error">{{$message}}</p>
            @enderror
            <input type="submit" value="Login">
        </form>
    </div>
</x-layout>