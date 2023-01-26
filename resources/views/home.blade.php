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
    margin: 30px 0;
    width: 100%;
  }

  .message {
    margin: auto;
    text-align: center;
    font-size: large;
  }

  .card {

    display: flex;
    justify-content: center;
  }

  .card_left {
    margin-top: 20px;
    margin-right: 40px;
    width: 400px;
    height: 150px;
    border: 1px solid white;
    border-radius: 5px;
    background-color: white;
    font-size: large;
  }

  .card_right {
    margin-top: 20px;
    width: 400px;
    height: 150px;
    border: 1px solid white;
    border-radius: 5px;
    background-color: white;
    font-size: large;
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
    @if (Auth::check())
    <div class="message">
      {{ Auth::user()->name }}さんお疲れ様です！
    </div>
    @else
    <div class="message">
      ログインしてください（<a href="/login">ログイン</a>｜<a href="/register">登録</a>）
    </div>
    @endif
    <div class="card">
      <form action="/home" method="POST">
        @csrf
        <input class="card_left" type="submit" value="勤務開始" name="start_time">
      </form>
      <form action="home" method="POST">
        @csrf
        <input class="card_right" type="submit" value="勤務終了" name="end_time">
      </form>
    </div>
    <div class="card">
      <form action="home" method="POST">
        @csrf
        <input class="card_left" type="submit" value="休憩開始" name="start_time">
      </form>
      <form action="home" method="POST">
        @csrf
        <input class="card_right" type="submit" value="休憩終了" name="end_time">
      </form>
    </div>
  </div>

  <div class="footer">
    <small>Atte, inc.</small>
  </div>
</body>