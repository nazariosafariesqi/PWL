<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{url('js/register.js')}}">
<link rel="stylesheet" href="{{url('css/register.css')}}">

<!------ Include the above in your HEAD tag ---------->

<form method="POST" action="{{ route('login') }}">
@csrf
<form>
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <input type="email" name="email" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <input type="password" name="password" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit">LogIn</button>
</form>


<p ><a href="#" >Forgot Password ?</a></p>	
		
		<div class="form-item">
		<p class="pull-left"><a href="{{url('register')}}"><small>Register</small></a></p>
        </div>
		