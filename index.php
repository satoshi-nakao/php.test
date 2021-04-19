<?php
// ini_set('display_errors', 1);
require('./database.php');//データベースの読込
  // SQL文を作成
  $sql =  'select * from users' ;

// クエリ実行（データを取得）
$res = $dbh->query($sql);
  
  // $browser_language = (string) (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) === true && $_SERVER['HTTP_ACCEPT_LANGUAGE'] !== '') ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
  // $browser_language = (isset($_GET['language']) === true && $_GET['language'] !== '') ? $_GET['language'] : $browser_language;
  // $language = (string) '';
  // switch (substr($browser_language, 0, 2)) {
  //   case 'de':
  //     $language = 'de';
  //     break;
  //   case 'en':
  //     $language = 'en';
  //     break;
  //   default:
  //     $language = 'en';
  // }

  // $available_languages = (array) [
  //   (array) [
  //       'name' => (string) 'English',
  //       'token' => (string) 'en',
  //   ],
  //   (array) [
  //       'name' => (string) 'Deutsch',
  //       'token' => (string) 'de',
  //   ],
  // ];
    
  // $switch_language = (string) '';
  // foreach ($available_languages as $available_language) {
  //   if ($available_language['token'] !== $language) {
  //       $switch_language .= '<a href="'.strip_tags($_SERVER['PHP_SELF']).'?language='.$available_language['token'].'" lang="'.$available_language['token'].'" hreflang="'.$available_language['token'].'">'.$available_language['name'].'</a> | ';
  //   }
  // }
  // $switch_language = substr($switch_language, 0, -3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<table border=1> 
<thead>
<tr>
<th>名前</th>
<th>メールアドレス</th>
<th>パスワード</th>
</tr>
</thead>
<tbody>
<?php foreach ($res->fetchAll() as $row): ?>
<tr>
<td><?= $row['name'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['password'] ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>
</html>
