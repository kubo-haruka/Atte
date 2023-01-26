<style>
  body {
    background-color: #f5f5f5;
    margin: 0 0;
  }

  .hedder {
    width: 100%;
    height: 70px;
    background: white;
    display: flex;
    justify-content: space-between;
  }

  h1 {
    font-weight: lighter;
    font-size: x-large;
    padding-left: 40px;
  }

  nav {
    margin-top: 5px;
  }

  li {
    display: inline-block;
    margin-left: 30px;
    margin-right: 30px;
    text-decoration: none;
  }

  li a {
    text-decoration: none;
  }

  .main {
    margin: auto;
    width: 90%;
  }

  table {
    margin-top: 30px;
    table-layout: fixed;
    width: 100%;
    border-collapse: collapse;
  }

  tr {
    border-top: solid 1px #808080;
  }

  th {
    padding: 30px 0;
  }

  td {
    padding: 30px 0;
    text-align: center;
  }

  .footer {
    width: 100%;
    height: 40px;
    background: white;
  }

  small {
    display: flex;
    justify-content: center;
    padding-top: 10px;
  }
</style>

<body>
  <div class="hedder">
    <h1>Atte</h1>
    <nav>
      <ul>
        <li><a href="/home">ホーム</a></li>
        <li><a href="/attendace">日付一覧</a></li>
        <li><a href="/logout">ログアウト</a></li>
      </ul>
    </nav>
  </div>

  <div class="main">
    <table>
      <tr>
        <th>名前</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩時間</th>
        <th>勤務時間</th>
      </tr>
      @foreach ($attendances as $attendance)
      <tr>
        <td>{{ $attendance->user->name }}</td>
        <td>{{ $attendance->start_time }}</td>
        <td>{{ $attendance->end_time }}</td>
        @if($attendance->rest != null)
        <td>{{ $attendance->rest->rest_time() }} </td>
        @else
        <td>00:00:00</td>
        @endif
        <td>{{ $attendance->attendance_time() }}</td>
      </tr>
      @endforeach
    </table>
  </div>
  <div class="footer">
    <p><small>Atte, inc.</small></p>
  </div>
</body>