<!-- Footer -->
<div class="wrapper row2">
  <div id="footer" class="clear">
    <div class="one_quarter first">
      <h2 class="footer_title">Footer Navigation</h2>
      <nav class="footer_nav">
        <ul class="nospace">
          <li><a href="{{route('homepage')}}">Home Page</a></li>
          <li><a href="{{route('manage-blood')}}">Send Blood Request</a></li>
          <li><a href="{{route('about')}}">About Us</a></li>
          <li><a href="{{route('donor')}}">Donors</a></li>
          <li><a href="{{route('contact')}}">Contact Us</a></li>
          <li><a href="{{route('posted-requests')}}">Blood Reuests</a></li>
        </ul>
      </nav>
    </div>
    <div class="one_quarter">
      <h2 class="footer_title">Latest Gallery</h2>
      <ul id="ft_gallery" class="nospace spacing clear">
        <li class="one_third first"><a href="#"><img src="{{asset('images/site/blood-3.jpg')}}" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="{{asset('images/site/blood-3.jpg')}}" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="{{asset('images/site/blood-3.jpg')}}" alt=""></a></li>
        <li class="one_third first"><a href="#"><img src="{{asset('images/site/blood-3.jpg')}}" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="{{asset('images/site/blood-3.jpg')}}" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="{{asset('images/site/blood-3.jpg')}}" alt=""></a></li>
        <li class="one_third first"><a href="#"><img src="{{asset('images/site/blood-3.jpg')}}" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="{{asset('images/site/blood-3.jpg')}}" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="{{asset('images/site/blood-3.jpg')}}" alt=""></a></li>
      </ul>
    </div>
    <div class="two_quarter">
      <h2 class="footer_title">Contact Us</h2>
      @if(Session::has('success'))
      <div class="alert alert-success my-3">

         <strong class="h5"> Success! </strong>  {{Session::get('success')}}

      </div>
      @endif
      <form class="rnd5" action="{{route('contactUs')}}" method="post">
        @csrf
        <div class="form-input clear">
          <label for="name">Name <span class="required">*</span><br>
            <input type="text" name="name" id="name" size="22">
          </label>
          <label for="email">Email <span class="required">*</span><br>
            <input type="text" name="email" id="email" size="22">
          </label>
          <label for="contact">Contact No <span class="required">*</span><br>
           <input type="text" name="contact" id="contact" size="22">
         </label>
        </div>
        <div class="form-message">
          <textarea name="message" id="message" cols="25" rows="10"></textarea>
        </div>
        <p>
          <input type="submit" value="Submit" class="button small orange">
        </p>
      </form>
    </div>
  </div>
</div>

<div class="wrapper row4">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="https://www.facebook.com/kk.hasan.1">Md.Kamrul Hasan</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>