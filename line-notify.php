 <?php

    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';

    $header = "{ name }";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $more = $_POST['more'];

    $message = $header .
        "\n" . "ชื่อจริง: " . $firstname .
        "\n" . "นามสกุล: " . $lastname .
        "\n" . "เบอร์โทรศัพท์: " . $phone .
        "\n" . "อีเมล์: " . $email .
        "\n" . "อื่นๆ: " . $more;

    if (isset($_POST["submit"])) {
        if ($firstname <> "" &&  $lastname <> "" &&  $phone <> "" &&  $email <> "" &&  $more <> "") {
            sendlinemesg();
            header('Content-Type: text/html; charset=utf8');
            $res = notify_message($message);
            echo '<script>
				setTimeout(function() {
				swal({
						title: "ติดต่อสอบถาม",
						text: "การส่งสำเร็จ",
						type: "success"
					}, function() {
					window.location = "index.php";
				});
				}, 200);
			</script>
			';
        } else {
            echo '<script>
				setTimeout(function() {
				swal({
						title: "ติดต่อสอบถาม",
						text: "กรุณากรอกข้อมูลให้ครบ",
						type: "error"
					}, function() {
					window.location = "index.php";
				});
				}, 500);
			</script>';
        }
    }

    function sendlinemesg()
    {
        define('LINE_API', "https://notify-api.line.me/api/notify");
        define('LINE_TOKEN', "{ กรอก token ของท่าน }");

        function notify_message($message)
        {
            $queryData = array('message' => $message);
            $queryData = http_build_query($queryData, '', '&');
            $headerOptions = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                        . "Authorization: Bearer " . LINE_TOKEN . "\r\n"
                        . "Content-Length: " . strlen($queryData) . "\r\n",
                    'content' => $queryData
                )
            );
            $context = stream_context_create($headerOptions);
            $result = file_get_contents(LINE_API, FALSE, $context);
            $res = json_decode($result);
            return $res;
        }
    }


    ?>
