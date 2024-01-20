<div class="w-screen min-h-[75px] h-content p-6 bg-primary flex items-center justify-around">
    <h1 class="text-2xl">
        KauQ
    </h1>
    <div>
        <ul>
            @auth
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button>Logout</button>
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</div>
