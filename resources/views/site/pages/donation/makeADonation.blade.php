@include('layouts.main')
<!-- content -->
<div class="wrapper row3">
  <div id="container">
        @include('site.pages.donor.side-nav')
     <div class="three_quarter">
      <section>
        <div id="respond">
            <h2 class="pb-4">Make a Donation</h2>
                @if(Session::has('success'))
                <div class="alert alert-success my-3">
        
                  <strong class="h5"> Success! </strong>  {{Session::get('success')}}
        
                </div>
                @endif

                @if(Auth::check())

                  <form action="{{route('add-donation')}}" method="post">
                        @csrf
      
                        @foreach ($patient as $item)
                         
                        <input name="user_id" type="hidden" value="{{ Auth::user()->id }}"> 
                        <input name="patient_id" type="hidden" value="{{ $item->id }}">
                        <div class="form-input clear">
                          <div class="one_third first" for="name"> 
                              <div class="py-3">Patients Name <span class="required">*</span><br></div>  
                              <div>{{$item->name}}<br></div>  
                              <input type="hidden" name="name" value="{{$item->name}}" id="name" size="22" style="border: 1px dotted black">
                          </div>
                          <div class="one_third" for="no_of_bag">
                              <div class="py-3">Donation Place<span class="required">*</span><br></div>  
                              <div>{{$item->location}}<br></div> 
                              <input type="hidden" name="donation_place" id="donation_place" value="{{$item->location}}" size="22" style="border: 1px dotted black">
                          </div>
                          <div class="one_third" for="blood">
                              <div class="py-3">Donation Date<span class="required">*</span><br></div>  
                              <input type="date" name="donation_date" id="donation_date" size="22" style="border: 1px dotted black">
                              @if ($errors->first('donation_date'))
                              <div class="alert alert-danger" role="alert">
                                {{ $errors->first('donation_date') }}
                              </div>
                              @endif
                          </div>
                        </div>                   
                        <div class="py-2">
                          <textarea name="description" id="description" placeholder="Description" cols="25" rows="10" style="border: 1px dotted black"></textarea>
                            @if ($errors->first('description'))
                            <div class="alert alert-danger" role="alert">
                              {{ $errors->first('description') }}
                            </div>
                            @endif
                        </div>
                       
                          <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                          @endforeach
                      </form>
                    
              @else

              You are not authenticated as donor please <a href="{{route('login')}}"> login </a> as Donor | New <a href="{{route('become-a-hero')}}">Register</a> as Donor
                  
              @endif
              </div>
            </div>
      </section>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>

@include('site.pertials.footer')