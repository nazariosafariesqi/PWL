<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{url('js/register.js')}}">
<link rel="stylesheet" href="{{url('css/register.css')}}">
<!------ Include the above in your HEAD tag ---------->

<form method="POST" action="{{ route('register') }}">
@csrf

<form>
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="email" name="email" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR NAME</p>
    <input type="text" class="input" name="name">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" class="input" name="password">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">CONFIRMATION PASSWORD</p>
    <input type="password" class="input" name="password_confirmation">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit">SUBMIT</button><br><br>
  <a href="{{('login')}}" type="submit">LogIn Now</a>
</form>