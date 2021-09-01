@include('layouts.main')


<!-- content -->
<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <section class="clear">
      <h1>About Us</h1>
      <div class="two_third first">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non sem erat. Mauris nulla orci, ornare id pulvinar in, ornare id lorem. Phasellus arcu ligula, faucibus sed commodo quis, pretium vel odio. Aliquam malesuada augue eget dolor lacinia vitae mollis metus ornare. Pellentesque sed enim non libero vehicula lacinia ac quis arcu. Donec tincidunt semper augue, tempus sagittis nulla tincidunt a. Sed bibendum posuere pharetra. Duis porta varius urna, sed hendrerit est imperdiet vel. Duis orci libero, dignissim in rhoncus sed, consequat eu dolor. Nam vel turpis urna, ac ornare lacus. Quisque dapibus aliquam porttitor.</p>
        <p>Phasellus felis metus, ornare nec consectetur a, placerat eu felis. Phasellus quis enim orci. Etiam vel dui nisi, sed semper urna. Ut mattis dignissim lacus, vitae pretium neque volutpat nec. Aliquam purus nibh, condimentum eu sollicitudin ut, tincidunt nec mauris. Sed vehicula dapibus felis id fermentum.</p>
        <p>Maecenas varius mattis sollicitudin. Nunc urna orci, vestibulum at scelerisque at, consectetur quis nibh. In hac habitasse platea dictumst. Etiam a dolor non ligula volutpat imperdiet vel sit amet massa. Curabitur mollis elementum lacus tristique tempor. Sed pellentesque venenatis nibh a ullamcorper.</p>
      </div>
      <div class="one_third">
        <div class="calltoaction opt1">
          <div class="push20">
            <h1>Need blood ?</h1>
            <p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur, integer commodo tristique odio, quis fringilla ligula&hellip;</p>
          </div>
          <div><a href="{{route('donor')}}" class="button large gradient orange">Manage Blood</a></div>
        </div>
      </div>
    </section>
    <!-- ################################################################################################ -->
    <section>
      <div id="tab-3" class="tab-content clear">
        <h2>Team Members</h2>
        <ul class="nospace clear">
          <li class="one_quarter first">
            <figure class="team-member"><img src="images/demo/team-member.gif" alt="">
              <figcaption>
                <p class="team-name">Md.Kamrul Hasan</p>
                <p class="team-title">Student Id:170228</p>
                <p class="team-description">Computer Science and Engineering <br> Discipline Khulna University <br> Khulna</p>
                <p class="read-more"><a href="#">Read More &raquo;</a></p>
              </figcaption>
            </figure>
          </li>
          <li class="one_quarter">
            <figure class="team-member"><img src="images/demo/team-member.gif" alt="">
              <figcaption>
                <p class="team-name">Md.Ashiqur Rahman</p>
                <p class="team-title">Student Id:170238</p>
                <p class="team-description">Computer Science and Engineering <br> Discipline Khulna University </p>
                <p class="read-more"><a href="#">Read More &raquo;</a></p>
              </figcaption>
            </figure>
          </li>
        </ul>
      </div>
    </section>

    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>


@include('site.pertials.footer')