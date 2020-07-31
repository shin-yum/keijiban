<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    
 <?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","");
    $stmt =$pdo->query("select*from 4each_keijiban");
    
  
    
 ?>
    
    
    
   <div class="pic1">
   <img src="4eachblog_logo.jpg";> 
   </div> 
    
<header>
    <ul>
     <li>トップ</li>
     <li>プロフィール</li>
     <li>4eachについて</li>
     <li>登録フォーム</li>
     <li>問い合わせ</li>
     <li>その他</li>
    </ul>
</header>  
    
    
<main>
 <div class="left">
        
  <h1>プログラミングに役立つ掲示板</h1>
        
   <div class="box1">
       
     <h2>入力フォーム</h2>
     <form method="post" action="insert.php">  
       
    <div>
        <label>ハンドルネーム</label>
        <br>
       <input type="text" class="text" size="35" name="handlename">
     </div>
     <br>
     <div>
         <label>タイトル</label>
         <br>
         <input type="text" class="text" size="35" name="title">
     </div>
     <br>
     <div>
         <label>コメント</label>
         <br>
         <textarea class="text" cols="70" rows="10" name="comments"></textarea>
     </div>
     <br>
     <div>
         <input type="submit" class="button" value="投稿する">

     </div>        
         
     </form>  

    </div>
     
     
   
     <?php
     
     while($row=$stmt->fetch()){
        echo "<div class='box2'>";
        echo "<h2>".$row['title']."</h2>";
        echo "<div class='contents'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
        echo "</div>";
         }
     ?>    
  
    </div>
    
    
    <div class="right">
        
      <h2>人気の記事</h2>
        <ul>
         <li>PHPおススメ本</li>
         <li>PHP MyAdminの使い方</li>
         <li>今人気のエディタ Top5</li>
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
         <li>JvScript</li>
        </ul>
     
    </div>   

    
 </main>    
    
     <footer>  
      copyright © internous|4each blog the which procvides A toZ about programming. 
    </footer>
    
</body>
</html>