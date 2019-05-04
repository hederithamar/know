@extends('frontend.layouts.app')

@section('title', app_name() . ' | Contact Us')

@section('content')
    @stack('before-scripts')
       
    
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
        {{ script(mix('js/main.js')) }}
        {{ style(mix('css/main.css')) }}
    @stack('after-scripts')
    <script>
    // Your web app's Firebase configuration
    </script>
    <div class="row justify-content-center">
        <div class="col col-3 align-self-center">
            <form>
                <div class="form-group">
                    <label> Indica la empresa</label>
                    <input type="text" id="name" placeholder="Indica el nombre" value="Procesar">
                </div>
                <div class="form-group">
                    <label> Indica el puesto</label>
                    <input type="text" id="role" placeholder="Indica el puesto" value="Developer">
                </div>
                <div class="form-group">
                    <label> Indica el periodo</label>
                    <input type="text" id="period" placeholder="Indica el periodo" value="2018- actual">
                </div>
                <div class="form-group">
                    <label> Indica la descripcion</label>
                    <input type="text" id="description" placeholder="Indica la descripcion" value="Developer">
                </div>
                <button type="button" class="btn button-primary" onclick="getJobData()">Click Me!</button>
            </form>
        </div><!--col-->

        <div id="professional-data-wrapper" class="col col-8 align-self-center">
            
            <div class="card-body">
                
            </div>
        </div><!--col-->
        
    </div><!--row-->

@endsection