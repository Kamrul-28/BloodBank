@include('layouts.main')
<!-- content -->
<div class="wrapper row3">
  <div id="container" class=" d-flex justify-content-center">
     <div class="three_quarter">
      <section>
        <div id="respond">
            <h2 class="text-center pb-4">Become A hero</h2>
                @if(Session::has('success'))
                <div class="alert alert-success my-3">
        
                  <strong class="h5"> Success! </strong>  {{Session::get('success')}}
        
                </div>
                @endif
                <form action="{{route('donorReg')}}" method="post">
                        @csrf
                    <div class="mx-5">
                            <div class="row">
                                <div class="col-md-4 py-3">
                                        <h6>Name</h6>
                                        <input type="text" name="name" class="form-control" required style="border: 1px dotted black">      
                                </div>
                                <div class="col-md-4 py-2">
                                        <h6 class="my-2">Email</h6>
                                        <input type="text" name="email" class="form-control" required style="border: 1px dotted black">
                
                                </div>
                                <div class="col-md-4 py-2">
                                        <h6 class="my-2">Password</h6>
                                        <input type="password" name="password" class="form-control" required style="border: 1px dotted black">
                
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 py-3">

                                        <h6 class="my-2">Blood Group</h6>
                                        <input type="text" name="blood" class="form-control" required style="border: 1px dotted black">
                
                                </div>
                                <div class="col-md-4 py-3">
                                        <h6 class="my-2">Contact No</h6>
                                        <input type="text" name="contact" class="form-control" required style="border: 1px dotted black">
                
                                </div>
                                <div class="col-md-4 py-3">
                                        <h6 class="my-2">School Name</h6>
                                        <input type="text" name="school" class="form-control" required style="border: 1px dotted black">
                
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 py-3">
                                        <h6 class="my-2">Address</h6>
                                        <input type="text" name="address" class="form-control" required style="border: 1px dotted black">
                
                                </div>
                                <div class="col-md-4 py-3">
                                        <h6 class="my-2">Date of Birth</h6>
                                        <input type="date" name="date_of_birth" class="form-control" required style="border: 1px dotted black">
                
                                </div>
                                <div class="col-md-4 py-3">
                                        <h6 class="my-2">height</h6>
                                        <input type="text" name="height" class="form-control" required style="border: 1px dotted black">
                
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-4 py-3">
                                        <h6 class="my-2">weight</h6>
                                        <input type="text" name="weight" class="form-control" required style="border: 1px dotted black">
                
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="">Gender</h6>
                                        <input type="radio" name="gender"  value="male" required>Male
                                        <input type="radio" name="gender"  value="female" required>Female
                                        <input type="radio" name="gender"  value="others" required>Others
                
                                    </div>
                            </div>

                    </div>

                    <div style="margin: 5% 5% 5% 5%">
                         <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                    </div>

                </form>
              </div>
            </div>
      </section>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>

@include('site.pertials.footer')