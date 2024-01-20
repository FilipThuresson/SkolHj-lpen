<x-auth-layout>
    <h1 class="text-gray-500">Hello World</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        @method('POST')
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button>Login!</button>
    </form>
</x-auth-layout>
