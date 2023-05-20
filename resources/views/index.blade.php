
    <?php $header = "Manage user"; ?>

    <x-app-layout>
        <x-slot name="header">
            {{ $header }}
        </x-slot>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <div class="container">
            <h1>User List</h1>

            <a href="{{ route('create') }}" class="btn btn-primary mb-3">Create User</a>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <a href="{{ route('show', $user->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <echo><h2>If you want to see the graph of orders, click on this button:</h2></echo>
        <a href="{{ route('pizza_orders') }}" class="btn btn-secondary">Graph of orders</a>
    </x-app-layout>
