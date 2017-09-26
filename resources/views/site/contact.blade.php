<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="background-color: red">
            <div class="panel panel-default">
                <div class="panel-heading">Написать мне</div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('index') }}">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Имя*</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" 
                                @if(count($errors) > 0)
                                    {{'autofocus'}}
                                @endif

                                 required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail*</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label">Сообщение*</label>
                            <div class="col-md-6">
                                <textarea id="text"  class="form-control" name="text" required>{{ old('text') }}
                                </textarea>
                                @if ($errors->has('text'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Отправить
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>