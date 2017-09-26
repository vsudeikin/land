<div class="container">
    <div class="row">
    @if(isset($edu) && is_object($edu))
        <table>
            <tr>
               <th>Название</th>
               <th>Описание</th>
               <th>Картинка</th>
            </tr>
        @foreach($edu as $v)
            <tr>
                <td>{{ $v->name }}</td>
                <td>{{ $v->desc}}</td>
                <td>{{ Html::image('img/'. $v->img) }} </td>
            </tr>    
        @endforeach
        </table>
    @endif
    </div>
</div>