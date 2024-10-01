<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <h1>User Page</h1>

    {{-- {{ print_r($users) }} --}}
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        @foreach ($users as $user )
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
             </tr>
        @endforeach
        <tr></tr>
    </table>

</div>
