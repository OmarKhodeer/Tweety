<form action="/profile/{{$user->name}}/follow" method="POST">
    @csrf
    <button
        type="submit"
        class="bg-blue-500 rounded-full shadow border border-gray-300 py-2 px-4 text-white text-xs"
    >
        {{auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>
