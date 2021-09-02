@include('admin.pertials.template')
@include('admin.pertials.nav-top')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 col-md-8">
            <h1 class="mt-4">Edit Patients Data</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{route('all-patients')}}" class="btn btn-primary">ALl Patients</a>
                    <a href="{{route('manage-blood')}}" class="btn btn-primary">Add New Patient</a>
                </div>
            </div>
            <div class="row card mb-4">
                <div class=" col-md-12 card-header">
                    Edit Detals
                </div>
                @foreach($data as $value)
                   <input type="hidden" name="id" value="{{$patient_id=$value->id}}">
                @endforeach
                
                <div class="card-body">
                    <form action="{{ route('updatePatient',$patient_id) }}" method="post">
                         @csrf
                         @foreach($data as $value)
                         <div class="form-input clear">
                              <div class="one_third first" for="name"> 
                                  <div class="py-3">Patients Name <span class="required">*</span><br></div>  
                                  <input type="text" name="name" id="name" size="22" style="border: 1px dotted black" value="{{$value->name}}">
                              </div>
                              <div class="one_third" for="blood">
                                  <div class="py-3">Blood Group<span class="required">*</span><br></div>  
                                  <input type="text" name="blood" id="blood" size="22" style="border: 1px dotted black" value="{{$value->blood}}">
                              </div>
                              <div class="one_third" for="no_of_bag">
                                  <div class="py-3">Required No Of Bag <span class="required">*</span><br></div>  
                                  <input type="text" name="no_of_bag" id="no_of_bag" size="22" style="border: 1px dotted black" value="{{$value->no_of_bag}}">
                              </div>
                            </div>
          
                            <div class="form-input clear py-3">
                                  <div class="one_third first" for="donation_date">
                                      <div class="py-3">Date Of Donation<span class="required">*</span><br></div>  
                                      <input type="date" name="donation_date" id="donation_date" size="22" style="border: 1px dotted black" value="{{$value->donation_date}}">
                                  </div>
                                  <div class="one_third" for="donation_time">
                                          <div class="py-3">Time of donation<span class="required">*</span><br></div>  
                                          <input  type="text" name="donation_time" id="donation_time" size="22" style="border: 1px dotted black" value="{{$value->donation_time}}">
                                  </div>
                                  <div class="one_third" for="managed">
                                          <div class="py-3">Managed No of Begs<span class="required">*</span><br></div>  
                                          <input type="text" name="managed" id="managed" size="22" style="border: 1px dotted black" value="{{$value->managed}}">
                                  </div>
                            </div>
          
                            <div class="form-input clear py-3">
                                  <div class="one_third first" for="location">
                                          <div class="py-3">Location<span class="required">*</span><br></div>  
                                          <input type="text" name="location" id="location" size="22" style="border: 1px dotted black" value="{{$value->location}}">
                                  </div>
                                  <div class="one_third" for="contact_no">
                                      <div class="py-3">Contact No<span class="required">*</span><br></div>  
                                      <input type="text" name="contact_no" id="contact_no" size="22" style="border: 1px dotted black" value="{{$value->contact_no}}">
                                  </div>
                                  <div class="one_third" for="relationship">
                                          <div class="py-3">Your Relationship with patient<span class="required">*</span><br></div>  
                                          <input type="text" name="relationship" id="relationship" size="22" style="border: 1px dotted black" value="{{$value->relationship}}">
                                  </div>
          
                            </div>
                            <div class="form-input clear py-3">
                                <div class="one_third first" for="desises">
                                        <div class="py-3">Desises<span class="required">*</span><br></div>  
                                        <input type="text" name="desises" id="desises" size="22" style="border: 1px dotted black" value="{{$value->desises}}">
                                </div>
                                <div class="one_third" for="email">
                                    <div class="py-3">Email<span class="required">*</span><br></div>  
                                    <input type="text" name="email" id="email" size="22" style="border: 1px dotted black" value="{{$value->email}}">
                                </div>
                                <div class="one_third" for="relationship">
                                        <div class="py-3">Password<span class="required">*</span><br></div>  
                                        <input type="password" name="password" id="password" size="22" style="border: 1px dotted black" value="{{$value->password}}">
                                </div>
          
                           </div>
                            <div class="message py-2">
                              <textarea name="message" id="message" cols="25" rows="10" style="border: 1px dotted black">{{$value->message}}</textarea>
                            </div>
                            @endforeach
                             <div style="margin: 5% 5% 5% 5%">
                                   <input type="submit" class="btn btn-primary" value="Update">
                              </div>
             
             
                     </form>
                </div>
            </div>
        </div>
    </main>
</div>