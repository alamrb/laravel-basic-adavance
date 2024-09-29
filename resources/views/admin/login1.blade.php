<h1>Admin Login Page for the use of name {{ $name }}</h1>

<h1><?php echo $name ?></h1>
<h1>{{ rand() }}</h1>

@foreach ($users  as $user )

<h1>{{ $user }}</h1>
@endforeach
