@extends('auth.base')

@section('body.form')
    <form class="forget-form" action="" method="post">
        <h3 class="font-green">Forget Password?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
        <div class="form-actions">
            <a href="{{ route('login') }}" id="register-back-btn" class="btn green btn-outline">Back</a>
            <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
        </div>
    </form>
@endsection