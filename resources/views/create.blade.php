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
                    <form action="{{route($path . '.store' )}}" method="post"> 
                      <div class="form-group">
                        <label for="nameInput">Название:</label>
                        <input type="text" name="name" id="nameInput" class="form-control" value="{{ old('name')}} ">
                           @if ($errors->has('name'))
                             <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                             </span>
                           @endif
                      </div>
                      <div class="form-group">
                        <label for="editor">Описание:</label>
                        <textarea name="desc" id="editor" class="form-control"> {{ old('desc') }} </textarea>
                           @if ($errors->has('desc'))
                             <span class="help-block">
                                <strong>{{ $errors->first('desc') }}</strong>
                             </span>
                           @endif
                      </div>   
                      <div class="form-group">
                        <label for="image">Картинка:</label>
                        <input type="file" id="image" name='img' class="filestyle" data-text="Выбрать" data-buttonBefore="true">
                           @if ($errors->has('img'))
                             <span class="help-block">
                                <strong>{{ $errors->first('img') }}</strong>
                             </span>
                           @endif
                      </div>  

                      {{ csrf_field() }}
                      
                      <div class="form-group">  
                      <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                        
                    </form>
                   
                </div>


            </div>
        </div>
    </div>
</div>


@endsection