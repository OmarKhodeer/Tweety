<h1 class="font-bold text-xl mb-4">Following</h1>
<ul>
    @foreach (auth()->user()->follows as $user)
        <li class="mb-4">
            <div>
                <a href="{{route('profile', $user->name)}}" class="flex items-center text-sm">
                    <img
                        src="{{$user->avatar}}"
                        alt="avatar"
                        class="rounded-full mr-2"
                        width="40"
                        height="40"
                        />
                    {{$user->name}}
                </a>
            </div>
        </li>
    @endforeach
</ul>
