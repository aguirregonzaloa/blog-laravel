   <!-- Sidebar Widgets Column -->
    <div class="col-md-4 text-left">

       
          <!-- Archives Widget -->
          <div class="card my-4">
            <h5 class="card-header">Archives</h5>
            <div class="card-body">
             
                  <ul class="list-unstyled mb-0">
                  
                   @foreach($archives as $stats)
                    <li>
                     <a href="/?month={{$stats['month']}}&year={{$stats['year']}}">
                     
                     {{$stats['month'] .' '. $stats['year']}}</a>
                    </li>
                    @endforeach
                    
                  </ul>
                </div>
        </div>
          

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

</div>

      