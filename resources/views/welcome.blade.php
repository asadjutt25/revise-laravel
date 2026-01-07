<h1>Welcome to my review practice...</h1>
<a href="/home">Home</a>
<a href="/about/asad">About</a>
<a href="/">welcome page</a>
<a href="/student/asad">student</a>
<a href="/user">user from controller</a>
<a href="name/{name}">data of name from controller</a>
<a href="/admin">view.admin.login</a>


{{-- lec20 --}}

<a href="{{ route('hm') }}">Go to home 20</a>
<a href="/home20/profile/Asad">Go To ASAD profile</a>



{{-- lecture no 39 --}}
<br><br><br>
<h2>
    {{ __('welcome39.heading1')}}
</h2>
<h3>{{ __('welcome39.subheading')}}</h3> <br>
<a href="/about39">{{ __('welcome39.about')}}</a><br>
<a href="/about39">{{ __('welcome39.home')}}</a><br>
<a href="/about39">{{ __('welcome39.contact')}}</a><br>