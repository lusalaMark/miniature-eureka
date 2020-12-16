<?php

$post = array(
    'author'       => 'Mark',
    'title'        => 'My awesome post',
    'body'         => 'KLB',
    'publish_date' => '20.02.2020',
);

//$email = "<h1>{$post ['title']}</h2>";
//$email .= "<p>{$post ['body']}</p>";
//$email .= "<div>{$post ['author']}</div>";
//echo $email;

//$email = sprintf("<h1>%s</h1><p>%s</p><div>%s</div>",$post ['title'],$post ['body'],$post ['author']);
//echo $email;

//Using Heredocs 
$email  = <<<EOT 
<h1>{$post['title']}</h1>
<p>By : {$post['author']}</p>
<h1>{$post['body']}</h1>

EOT;

?> 