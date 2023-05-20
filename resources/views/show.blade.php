<!-- resources/views/users/show.blade.php -->

<?php $header = "Manage user";?>
<x-app-layout>
    <x-slot name="header">
        {{ $header }}
    </x-slot>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <div class="container">
        <h1>User Details</h1>

        <table class="table">
            <tbody>
                <tr>
                    <th>ID:</th>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Role:</th>
                    <td>{{ $user->role }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
    </div>
</x-app-layout>

