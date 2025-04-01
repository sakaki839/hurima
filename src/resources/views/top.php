<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/top.css">
</head>
<body>
        <header>
            
        </header>
        <div class="flexbox-container">
            <aside>
                    
            </aside>
            <main>

                <div class="contact-form__content">
      <div class="ha">
        <h2>ログイン</h2>
      </div>
      <form class="form" action="/mypage/profile" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
          </div>
          <div class="ha">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">パスワード</span>
          </div>
          <div class="ha">
            <div class="form__input--text">
              <input type="pas" name="pas" placeholder="" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        
        <div class="ha">
          <button class="form__button-submit" type="submit" onclick="location.href='/register'">ログインする</button>
        </div>
<div class=ha>
     <a href="/register">会員登録はこちら</a>
</div>
       
      </form>
    </div>

            </main>
            <aside>
               
            </aside>
        </div>
        <footer>
            
        </footer>
    </body>
</html>