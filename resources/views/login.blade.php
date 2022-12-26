<style>
  body {
    background-color: #f5f5f5;
    margin: 0 0;
  }

  .hedder {
    width: 100%;
    height: 70px;
    background: white;
  }

  h1 {
    font-weight: lighter;
    font-size: x-large;
    padding-top: 15px;
    padding-left: 40px;
  }

  .main {
    margin: auto;
    width: 50%;
  }

  h2 {
    margin-top: 80px;
    margin-bottom: 40px;
    text-align: center;
    font-weight: lighter;
  }

  .form_text input {
    width: 100%;
    height: 45px;
    border: solid 1px gray;
    border-radius: 5px;
  }

  .form_text input::placeholder {
    padding-left: 15px;
    color: #a6a6a6;
  }

  .form_text input.submit {
    background-color: #175ce6;
    color: white;
    border: solid 1px #175ce6;
    border-radius: 5px;
  }

  .login {
    margin-bottom: 120px;
    text-align: center;
  }

  .login p {
    color: #a6a6a6;
    text-decoration: none;
    margin-top: 30px;
    margin-bottom: 0;
  }

  .login a {
    text-decoration: none;
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
  </div>

  <div class="main">
    <h2>ログイン</h2>
    <form class="form" action="login" method="post">
      @csrf
      <div class="form_text">
        <p><input type="email" name="email" placeholder="メールアドレス"></p>
        <p><input type="password" name="password" placeholder="パスワード" required autocomplete="new-password"></p>
        <p><input class="submit" type="submit" name="submit" value="ログイン"></p>
      </div>
    </form>
    <div class="login">
      <p>アカウントをお持ちの方はこちらから</p>
      <a href="/register">会員登録</a>
    </div>
  </div>
  <div class="footer">
    <p><small>Atte, inc.</small></p>
  </div>
</body>