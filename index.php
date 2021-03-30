<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <header>
            <img src="4eachblog_logo.jpg">
            
            <ul class="menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        
        <maim>
            <div class="content">
                <div class="left">
        
                    <h1>プログラミングに役立つ掲示板</h1>
                    
                    <h2>入力フォーム</h2>
                    <form method="post" action="insert.php">
                        
                        <div>
                            <input type="text" name="handlename" size="35" class="name">
                        </div>
                        
                        <div>
                            <input type="text" name="title" size="35" class="title">
                        </div>
                        
                        <div>
                            <textarea name="comments" rows="4" cols="40" class="comments"></textarea>
                        </div>
                        
                        <div>
                            
                            <input type="submit" name="button" class="submit">
                        
                        </div>
                       
                    </form>
                    
                    
                    
                </div>
                
            
                
                
                <div class="right">
                    
                    <h2>人気の記事</h2>
                     <ul>
                        <li>PHPおすすめの本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ　Top5</li>
                        <li>HTMLの基礎</li>
                </ul>
                    
                    <h2>オススメリンク</h2>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                    <h2>カテゴリ</h2>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div> 
            
       </maim>
    </body>
        
    
    <footer>
        copyroght ©︎ internous | 4each blog the which provideos A to Z about programming
    </footer>
</html>