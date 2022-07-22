```php
$header = "มีเเจ้งเตื่อน!"; // ส่วน header ใส่ไรก็ได้
$text = $_POST['text'];
$message = $header . "\n" . "Text : " . $text;
sendline();
notify_message($message);

function sendline()
{
  define('LINE_API', "https://notify-api.line.me/api/notify");
  define('LINE_TOKEN', ""); // Line token in : https://notify-bot.line.me/my/
  function notify_message($message)
  {
    $data = array('message' => $message);
    $data = http_build_query($data, '', '&');
    $options = array(
      'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
          . "Authorization: Bearer " . LINE_TOKEN . "\r\n"
          . "Content-Length: " . strlen($data) . "\r\n",
        'content' => $data
      )
    );
    $context = stream_context_create($options);
    $result = file_get_contents(LINE_API, FALSE, $context);
    $response = json_decode($result);
    return $response;
  }
}
```
