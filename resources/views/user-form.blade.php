<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <h1>Add New User</h1>

    <h1><a href="{{ route('testhome') }}">Go to Home</a></h1>

    {{ URL::current() }}
    <h3> {{ URL::full() }}</h3>
    <div>

        {{-- @if($errors->any())
            @foreach ($errors->all() as $error )
                <div style="color: red">
                    {{ $error }}
                </div>
            @endforeach
        @endif --}}

        <form action="adduser" method="post">
            @csrf
            <div class="input-wrapper">
                <input type="text" placeholder="Enter User Name" name="username" value="{{ old('username') }}" class="{{ $errors->first('username')?'input-error':'' }}">
                <span style="color:red"> @error('username'){{ $message }} @enderror </span>
            </div>
              <div class="input-wrapper">
                <input type="text" placeholder="Enter User Email" name="email" class="{{ $errors->first('username')?'input-error':'' }}">
                  <span style="color:red"> @error('email'){{ $message }} @enderror </span>
            </div>
              <div class="input-wrapper">
                <input type="text" placeholder="Enter User City" name="city" class="{{ $errors->first('city')?'input-error':'' }}">
                   <span style="color:red"> @error('city'){{ $message }} @enderror </span>
            </div>
            <div>
                <h5>User Skill</h5>
                <div class="input-wrapper">
                <input type="checkbox" name="skill[]" value="PHP" id="php">
                <label for="php">PHP</label>
            </div>
            <div class="input-wrapper">
                <input type="checkbox" name="skill[]" value="Node" id="node">
                <label for="node">Node</label>
            </div>
            <div class="input-wrapper">
                <input type="checkbox" name="skill[]" value="Java" id="java">
                <label for="node">Java</label>
            </div>
  <span style="color:red"> @error('skill'){{ $message }} @enderror </span>
            </div>
            <div>
                <h5>Gender</h5>
                <div class="input-wrapper">
                <input type="radio" name="gender" value="male" id="male">
                <label for="male">Male</label>
            </div>
            <div class="input-wrapper">
                <input type="radio" name="gender" value="Female" id="female">
                <label for="female">Female</label>
            </div>


            </div>
            <div>
                <h5>City</h5>
                <select name="city" id="">
                    <option value="Dhaka">Dhaka</option>
                    <option value="Gazipur">Gazipur</option>
                    <option value="Tangail">Tangail</option>
                </select>
            </div>

            <div>
                <h5>Age</h5>
                <input type="range" name="age" min="18" max="100">

            </div>

            <div class="input-wrapper">
                <button>Add New User</button>
            </div>
        </form>
    </div>
</div>

<style>
    .input-error{
        border: 1px solid red;
        color: red;
    }
</style>
