@include('front-end.layouts.button')
<form action="{{ route('cart.add') }}" id="data-form-add-to-cart" method="POST">
  {{ csrf_field() }}
  <input id="qty" type="number"  name="qty" value="1" min="1" max="100" hidden>
  <input id="data-input-add-to-cart" type="text"  name="txtBookId" value="" hidden min="1" max="100">
</form>
<footer class="page-footer" >
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Contact me via Facebook</h5>
        
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Liên kết</h5>
        <ul>
          <li><div class="g-ytsubscribe"  data-layout="full" data-count="default"></div></li>
          <br>
          <li><a class="grey-text text-lighten-3" target ="_blank" href="https://github.com/dhdien03">Project on Github</a></li>
          <script src="https://apis.google.com/js/platform.js"></script>


        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © {{date("Y")}} Copyright DoHuuDien
    
    </div>
  </div>
</footer>