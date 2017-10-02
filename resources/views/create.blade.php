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
                    <form action="{{route($path . '.store' )}}" method="post" enctype="multipart/form-data"> 
                      <div class="form-group">
                        <label for="nameInput">Название:</label>
                        <input type="text" name="name" id="nameInput" class="form-control" value="{{$name or old('name') }} ">
                           @if ($errors->has('name'))
                             <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                             </span>
                           @endif
                      </div>
                      <div class="form-group">
                        <label for="editor">Описание:</label>
                        <textarea name="desc" id="editor" class="form-control">{{$desc or old('desc')}}
                         </textarea>
                           @if ($errors->has('desc'))
                             <span class="help-block">
                                <strong>{{ $errors->first('desc') }}</strong>
                             </span>
                           @endif
                      </div>   
                      @isset($img)
                       <div class="form-group">
                        <label for="imageOld">Картинка:</label>
                        <img src="/img/{{$path}}/{{ $img or ''}}" alt="{{$name or ''}}" id="imageOld">
                      </div> 
                      @endisset
                      <div class="form-group">
                        <label for="imageS">Картинка:</label>
                        <input type="file" id="imageS" name="img" class="filestyle" data-text="Выбрать" data-buttonBefore="true" accept="image/jpeg,image/png,image/gif,image/jpg" >
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