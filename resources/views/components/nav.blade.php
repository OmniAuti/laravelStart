<header>
    <nav>
        <x-nav_links :active="request()->is('/')" href="/">Home</x-nav_links>
        <x-nav_links :active="request()->is('/about')" href="about">About</x-nav_links>
        <x-nav_links :active="request()->is('/posts')" href="posts">Posts</x-nav_links>
        <x-nav_links :active="request()->is('/create')" href="/create">Create</x-nav_links>
    </nav>
</header>