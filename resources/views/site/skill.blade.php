<div class="container">
    <div class="row" id="block_skill">
    @if(isset($skill) && is_object($skill))
        <table >
            <tr>
               <th>Название</th>
               <th>Описание</th>
               <th>Картинка</th>
            </tr>
        @foreach($skill as $v)
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