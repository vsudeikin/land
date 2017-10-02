<div class="container">
    <div class="row">
    @if(isset($portfolio) && is_object($portfolio))
        <table >
            <tr>
               <th>Название</th>
               <th>Ссылка</th>
               <th>Картинка</th>
            </tr>
        @foreach($portfolio as $v)
            <tr>
                <td>{{ $v->name }}</td>
                <td>{{ $v->link}}</td>
                <td>{{ Html::image('img/portfolio/'. $v->img) }} </td>
            </tr>    
        @endforeach
        </table>
    @endif
    </div>
</div>