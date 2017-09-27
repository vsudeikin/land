  <thead>
    <tr>
      <th>Имя</th>
      <th>email</th>
      <th>Дата</th>
      <th>Телефон</th>
      <th>Картинка</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a href='{{ route("about.edit", $rows->id) }}' title="Редактировать">{{$rows->name}}</a></th>
      <td>{{$rows->email}}</td>
      <td>{{$rows->date}}</td>
      <td>{{$rows->phone}}</td>
      <td>{{$rows->img}}</td>
    </tr>
  </tbody>