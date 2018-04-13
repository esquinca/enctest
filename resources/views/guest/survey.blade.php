<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('guest.partials.htmlheader')
<body>
<section id="wrapper" class="login-register">
 <div class="container-fluid" style="margin-top: 1%">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="white-box">
              <form class="form-horizontal form-material" id="loginform" action="index.html">
                <div class="form-group">
                  <div class="col-xs-12 text-center">
                    <div class="user-thumb text-center"> <img alt="thumbnail" class="rounded" width="100" src="../images/venue/demo.png">
                      <h3>{{$hotels}}</h3>
                    </div>
                  </div>
                </div>
                <div class="form-group ">
                  <div class="col-xs-12">
                    @foreach ($search_questions as $preguntithas)
                      <h5 class="mb-0 mt-10 text-left">{{ $loop->iteration }}-.{{ $preguntithas->name }}</h5>
                    <label class="custom-control custom-radio">
                      <input name="radio{{ $loop->iteration }}" type="radio" value="10" required class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description"><i class="fa fa-smile-o text-success emotion"></i><br> <small></small> </span>
                    </label>
                    <label class="custom-control custom-radio">
                      <input name="radio{{ $loop->iteration }}" type="radio" value="7" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description"><i class="fa fa-meh-o text-warning emotion"></i><br> <small></small> </span>
                    </label>
                    <label class="custom-control custom-radio">
                      <input name="radio{{ $loop->iteration }}" type="radio" value="5" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description"><i class="fa fa-frown-o text-danger emotion"></i><br> <small></small> </span>
                    </label>
                    @endforeach
                  </div>
                </div>
                <div class="form-group text-center">
                  <div class="col-xs-12">
                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Completar</button>
                  </div>
                </div>
              </form>
            </div>
         </div>
     </div>
 </div>
  <!-- Preloader -->
    </section>
    @section('script')
      @include('layouts.partials.admin_scripts')
    @show
</body>
</html>
