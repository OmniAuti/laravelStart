<header>
    <nav>
        @auth
        <x-nav_links :active="request()->is('/')" href="/">Home</x-nav_links>
        <x-nav_links :active="request()->is('/about')" href="/about">About</x-nav_links>
        <x-nav_links :active="request()->is('/posts')" href="/posts">Posts</x-nav_links>
        <x-nav_links :active="request()->is('/posts/create')" href="/posts/create">Create</x-nav_links>
        @endauth
        @guest
        <x-nav_links :active="request()->is('/register')" href="/register">Register</x-nav_links>
        <x-nav_links :active="request()->is('/login')" href="/login">Login</x-nav_links>
        @endguest
        @auth
        <form action="/logout" method="POST">
            @csrf
            <input type="submit" value="Logout">
        </form>
        @endauth
    </nav>
</header>