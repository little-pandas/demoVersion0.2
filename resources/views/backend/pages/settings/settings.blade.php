@extends('layouts.master');


@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card card-info display_block"">     
            <div class="card-header">
                <h4 class="card-title">Settings</h4>
            </div><!--end card-header-->                                  
            <div class="card-body"> 
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="languages" class="nav-link" aria-selected="true">Languages</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/priorities" class="nav-link" aria-selected="true">Priorities</a>
                    </li>
                   
                    
                    <li class="nav-item">
                        <a href="{{route('admin.currencies')}}" class="nav-link" aria-selected="true">Currencies</a>
                    </li>
                   
                    <li class="nav-item">
    
                        <a href="{{route('admin.leadStatus')}}" class="nav-link" aria-selected="true">Lead Status</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.leadSource')}}" class="nav-link" aria-selected="true">Lead Source</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a href="/admin/departments" class="nav-link" aria-selected="true">Departements</a>
                    </li>
                </ul>

            </div>  <!--end card-body-->                                     
        </div><!--end card-->
    </div><!--end col-->
    <div class="col-lg-8">
        <div class="card"> 
            <div class="card-header">
                @yield('card-header-settings')
            </div><!--end card-header-->                                       
            <div class="card-body"> 
                @yield('settings-content')
            </div>  <!--end card-body-->                                     
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->


@endsection