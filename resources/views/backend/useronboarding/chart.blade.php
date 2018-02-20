@extends('layouts.app')

@section('content')
<div class="container">
<!-- Ajax implementation -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Ajax Chart Loading</div>

                <div class="panel-body">
                    <div id="container" style="width:100%; height:400px;"></div>

                </div>
            </div>
        </div>
    </div>

    <!-- Vue.js implementation -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Vue Chart Loading</div>
                <div class="panel-body">
                    <div id="root" style="width:100%; height:400px;"> </div>
                </div>
            </div>
        </div>
    </div>
   

</div>
@endsection

