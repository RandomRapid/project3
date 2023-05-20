
<!DOCTYPE html>
<html>
<head>
<title>Forum</title>
<link rel="stylesheet" type="text/css" href="../style/forumstyle.css">
</head>
<body>
<div class="container">
<div class="posts">
<h1>Forum</h1>
<h2>Recent Posts:</h2>
<table>
<tr>
<th>Username</th>
<th>Post</th>
<th>Date</th>
</tr>
                @foreach($posts as $post)
<tr>
<td>{{ $post->username }}</td>
<td>{{ $post->text }}</td>
<td>{{ $post->date }}</td>
</tr>
                @endforeach
</table>
</div>
<div class="form">
<form method="POST" action="/forum">
    @csrf
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="post">New Post:</label>
        <textarea name="post" id="post" required></textarea>
    </div>
    <input type="submit" name="submit" value="Submit">
</form>
<a href="{{ route('introduction') }}" class="btn btn-secondary">Go back to main page</a>
</div>
</div>
</body>
</html>