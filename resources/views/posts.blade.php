<x-layout>
    <div>
        @foreach ($posts as $post)
           <div class="post--container">
                <a href="/post/{{$post['id']}}">{{$post['address']}}</a>
           </div> 
        @endforeach
    </div>
</x-layout>