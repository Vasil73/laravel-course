<div class="container col-10 pt-3">
    <h2>Список пользователей</h2>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} {{ $user->surname }} - {{ $user->email }}</li>
        @endforeach
    </ul>
</div>
