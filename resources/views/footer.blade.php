<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontedn/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="{{asset('frontend/js/sweetalert2.min.js')}}"></script>
  

  <!-- Custom scripts for this template -->
  <script src="{{asset('js/clean-blog.min.js')}}"></script>


  <script>
      @if (Session::has('message'))
    var type="{{ Session::get('alert-type','info') }}"
    switch(type){
        case'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case'success':
        toastr.success("{{ Session::get('message') }}");
            break;
        case'warning':
        toastr.warning("{{ Session::get('message') }}");
            break;
        case'error':
        toastr.error("{{ Session::get('message') }}");
            break;
        
            
      } 
  @endif
  </script>
  <script>
    $(document).on("click","#delete", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        })
        .then((willDelete) => {
          if (willDelete.isConfirmed) {
            window.location.href= link;
            Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
          }else{
            Swal.fire(
                  'Saved!',
                  'Your data has saved',
                  'cancelled'
                )
          }
        });
    });
  </script>

  