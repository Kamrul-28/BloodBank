@include('layouts.main')
<!-- content -->
<div class="wrapper row3">
  <div id="container">

     
        <div class="row">
        @foreach ($bloodRequest as $post)
                @if ($post->is_posted == true)

                        @if ($post->managed != $post->no_of_bag)
          
                                <div class="card col-md-6 mb-5">
                                        <article class="clear">
                                                <header>
                                                        <div class="card-header" id="nav_background">
                                                                <h2><a class=" text-warning"  href="#"> {{$post->location}} <span class="text-danger">({{$post->blood}})</span></a></h2>
                                                        </div>
                                                        <div class="card-body" style="font-family: CaviarDreamsBold">
                                                                <div >Blood Group: {{$post->blood}}</div>
                                                                <div >Donation Date: {{$post->donation_date}}</div>
                                                                <div >Donation Time: {{$post->donation_time}}</div>
                                                                <div class="py-3">
                                                                        {{$post->name}} (Male, aged 55) needs {{$post->no_of_bag}} bag(s) <span class="text-danger">{{$post->blood}}</span> 
                                                                        blood by {{$post->donation_date}} - {{$post->donation_time}} in {{$post->location}}. managed {{$post->managed}} bag(s).  If you can donate, please contact {{$post->contact_no}} ({{$post->relationship}}s).
                                                                </div>
                                                        </div>

                                                        <div class="card-footer">
                                                            <a class="btn h4 btn-lg btn-primary text-warning" href="{{route('make-a-donation',$post->id)}}">Make A Donation &raquo;</a>
                                                        </div>

                                                </header>

                                        </article>

                                </div>
                          @endif
                @endif
        @endforeach

        </div>
    <div class="clear"></div>
  </div>
</div>

@include('site.pertials.footer')