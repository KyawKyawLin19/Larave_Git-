@extends('public.layout')
@section('content')
        <h2 class="text-center">
        Quaratine Camp
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <select class="form-control" name="city" id="city">
                        <option selected="false">
                            City
                        </option>

                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-control" name="township" id="township">
                        <option selected="false">
                            Township
                        </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn-primary" type="submit" id="search" name="search">Search</button>
                </div>
            </div>
        </div>
@endsection 


@section('scripts')
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('select[name="city"]').on('change',function(){
                var cityID = jQuery(this).val();
                if(cityID){
                    jQuery.ajax({
                        url : '/getTownships/' + cityID,
                        type : "GET",
                        data : '',
                        // dataType : 'json',
                        success : function(data){
                            data = JSON.parse(data);
                            window.alert(data);
                        }
                    });
                }
                else{
                    $('select[name="township"]').empty();   
                }
            });
        });
    </script>   
@endsection