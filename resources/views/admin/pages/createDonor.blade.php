@include('admin.pertials.template')
@include('admin.pertials.nav-top')
@include('admin.pertials.nav-side')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add New Donor</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Donors</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{route('all-donors')}}" class="btn btn-primary">ALl Donors</a>
                </div>
            </div>
            <div class="row card mb-4">
                <div class=" col-md-12 card-header">
                    Enter Detals of New Donor
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success mt-2">
        
                   <strong class="h5"> Success! </strong>  {{Session::get('success')}}
        
                </div>
                @endif
                <div class="col-md-10 card-body">
                    <form action="{{route('storeDonor')}}" method="post">
                            @csrf
                        <div class="mx-5">

                            <h6>Name</h6>
                            <input type="text" name="name" class="form-control" required>  
                            
                            <h6 class="my-2">Email</h6>
                            <input type="text" name="email" class="form-control" required>

                            <h6 class="my-2">Password</h6>
                            <input type="password" name="password" class="form-control" required>

                            <h6 class="my-2">Blood Group</h6>
                            <input type="text" name="blood" class="form-control" required>

                            <h6 class="my-2">Contact No</h6>
                            <input type="text" name="contact" class="form-control" required>

                            <h6 class="my-2">School Name</h6>
                            <input type="text" name="school" class="form-control" required>

                            <h6 class="my-2">Address</h6>
                            <input type="text" name="address" class="form-control" required>

                            <h6 class="my-2">Date of Birth</h6>
                            <input type="date" name="date_of_birth" class="form-control" required>

                            <h6 class="my-2">height</h6>
                            <input type="text" name="height" class="form-control" required>

                            <h6 class="my-2">weight</h6>
                            <input type="text" name="weight" class="form-control" required>

                            <h6 class="my-2">Gender</h6>
                            <input type="radio" name="gender"  value="male" required>Male
                            <input type="radio" name="gender"  value="female" required>Female
                            <input type="radio" name="gender"  value="others" required>Others

                        </div>

                        <div style="margin: 5% 5% 5% 5%">
                             <input type="submit" class="btn btn-primary" value="Submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
</div>