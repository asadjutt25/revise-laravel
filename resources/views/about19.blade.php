<div>
     <h1>about no 19 Home19</h1>
     <a href="/about19">About page 19</a>
     <h2>last url:{{ url()->previous() }} </h2>
     <a href="{{ URL::to('/about19') }}">About19</a>
       <a href="{{ URL::to('/home19') }}">Home19</a>
       <a href="{{ URL::to('/home19',['asad']) }}">Home 19 about asad</a>
       
</div>
