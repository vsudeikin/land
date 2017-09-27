@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Редактировать разделы</strong></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <ul class="nav nav-tabs">
                  <li class="nav-item">  
                    <a href="{{ route('about.index') }}" class="nav-link {{$about or ''}}" >Про меня</a>
                  </li>  
                  <li class="nav-item">  
                    <a href="{{ route('edu.index') }}" class="nav-link {{$edu or ''}}">Образование</a>
                  </li>  
                  <li class="nav-item">  
                    <a href="{{ route('skill.index') }}" class="nav-link {{$skill or ''}}">Навыки</a>
                  </li>  
                  <li class="nav-item">  
                    <a href="{{ route('portfolio.index') }}" class="nav-link {{$portfolio or ''}}">Мои работы</a>
                  </li>  
                </ul>
                </div>
                
                
                <div class="container">
                <table class="table table-sm">
                @if ( isset($about) )
                  @include('site.edit.about')
                @elseif (isset($edu) || isset($skill) || isset($portfolio) )
                  @include('site.edit.common')
                @endif
                </table>
                </div>  


            </div>
        </div>
    </div>
</div>
@endsection
