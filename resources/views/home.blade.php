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
  }

  .card_right {
    margin-top: 20px;
    width: 400px;
    height: 150px;
    border: 1px solid white;
    border-radius: 5px;
    background-color: white;
  }

  p {
    margin: 0 auto;
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
    <div class="message">
      さんお疲れ様です！
    </div>
    <div class="card">
      <div class="card_left">
        <p>勤務開始</p>
      </div>
      <div class="card_right">
        <p>勤務終了</p>
      </div>
    </div>
    <div class="card">
      <div class="card_left">
        <p>休憩開始</p>
      </div>
      <div class="card_right">
        <p>休憩終了</p>
      </div>
    </div>
  </div>

  <div class="footer">
    <p><small>Atte, inc.</small></p>
  </div>
</body>