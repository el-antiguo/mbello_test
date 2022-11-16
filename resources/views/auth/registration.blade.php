
<form method="POST" action="{{ route('register.process') }}">
    @csrf
    <div>
        <input type="text" placeholder="name" id="name" class="form-control" name="name" required autofocus>
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div>
        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required>
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div>
        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <button type="submit" >Signin</button>
</form>