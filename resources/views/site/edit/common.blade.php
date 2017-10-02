<thead>
    <tr>
      <th>#</th>
      <th>Название</th>
      <th>Описание</th>
      <th>Картинка</th>
      <th>Удалить</th>
    </tr>
</thead>

<tbody>
@foreach($rows as $k => $v )
    <tr>
    @foreach($v as $key => $val)
        <td>
        @if( $key == 'name')
            <a href='{{ route($path . ".edit", $v["id"]) }}' title="Редактировать">{{$val}}</a>
        @else {{$val}}
        @endif
        </td>
    @endforeach
      <td>
        <form action='{{ route($path . ".destroy", $v["id"]) }}' method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <input class="btn btn-danger btn-sm" type="submit" value="Удалить">
        </form>
      </td>
    </tr>
@endforeach
</tbody>

<div class="container">
<a class="btn btn-primary btn-sm" href='{{ route($path . ".create") }}'>Добавить</a>
</div>