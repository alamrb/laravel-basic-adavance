<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <h1>This is studet Page</h1>
    @foreach ( $datas as $data )
          <h1>{{ $data->name }}</h1>
          <h1>{{ $data->email }}</h1>
    @endforeach

</div>
