<?php
header('Content-type: text/xml; charset=utf-8');
date_default_timezone_set ('Asia/Shanghai');
$str = '';
$str .= '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$str .= '<rss version="2.0"' . "\n";
$str .= 'xmlns:content="http://purl.org/rss/1.0/modules/content/"' . "\n";
$str .= 'xmlns:wfw="http://wellformedweb.org/CommentAPI/"' . "\n";
$str .= 'xmlns:dc="http://purl.org/dc/elements/1.1/"' . "\n";
$str .= 'xmlns:atom="http://www.w3.org/2005/Atom"' . "\n";
$str .= 'xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"' . "\n";
$str .= 'xmlns:slash="http://purl.org/rss/1.0/modules/slash/"' . "\n";
$str .= '>' . "\n";
$str .= '<channel>' . "\n";
$str .= '<title>faceair的博客</title>' . "\n";
$url = 'http://'  . $_SERVER['SERVER_NAME'] . ($_SERVER["SERVER_PORT"] == 80 ? '' : ':' . $_SERVER["SERVER_PORT"]) . $_SERVER["REQUEST_URI"]; 
$str .= '<atom:link href="' . $url . '" rel="self" type="application/rss+xml" />' . "\n";
$str .= '<link>http://zhihudaily.sinaapp.com/</link>' . "\n";
$str .= '<description>开放姿态</description>' . "\n";
$str .= '<lastBuildDate>'. date(DATE_RSS) . '</lastBuildDate>' . "\n";
$str .= '<language>zh-CN</language>' . "\n";
$str .= '<sy:updatePeriod>faceair</sy:updatePeriod>' . "\n";
$str .= '<generator>http://zhihudaily.sinaapp.com/</generator>' . "\n";

foreach($blog_item as $item){ 
    $str .= '<item>' . "\n";
    $str .= '<title><![CDATA[' . $item['title'] . ']]></title>' . "\n";
    $str .= '<link>' . $base_url .'/archives/'. $item['id'] . '</link>' . "\n";
    $str .= '<pubDate>' . date(DATE_RSS, strtotime($item['time'])) . '</pubDate>' . "\n";
    $str .= '<dc:creator>知乎日报</dc:creator>' . "\n";
    $str .= '<guid isPermaLink="false">' . $base_url .'/archives/'. $item['id'] . '</guid>' . "\n";
    $str .= '<description><![CDATA[' . $item['body'] . ']]></description>' . "\n";
    $str .= '<content:encoded><![CDATA[' . $item['body'] . ']]></content:encoded>' . "\n";
    $str .= '</item>' . "\n";
} 

$str .= '</channel>' . "\n";
$str .= '</rss>' . "\n";
echo $str;