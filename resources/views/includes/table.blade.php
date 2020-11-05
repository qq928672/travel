<style>
  a{
    color:black;
  }
</style>
<table class="table">
  <thead>
    <tr>
      <th scope="col">活動名稱</th>
      <th scope="col">時間</th>
      <th scope="col">地點</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($news as $title)
    <tr>
      <td><a href="https://khh.travel/zh-tw/event/news/{{$title->NID}}" target="_blank">{{$title->name}}</a></td>
      <td>{{$title->location}}</td>
      <td>{{$title->time}}</td>
    </tr>
    @endforeach
  </tbody>
</table>