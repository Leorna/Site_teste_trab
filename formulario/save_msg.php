<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Mensagem Enviada</title>
     <style>
        body {
            text-align: center;
            background-color: pink;
        }

        h1.messages {
            font-size: 200px;
            color:purple;
        }

        .messages {
            font-size: 150%;
            color: purple;
        }
    </style>
</head>
<body>
    <?php
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];

        function saveFile() {
            global $subject;
            global $msg;
            $file = fopen("data.txt", "w");
            $data = $subject . "/n" . $msg . "\n";
            fwrite($file, $data);
            fclose($file);
        }

        echo '<h1 class="messages">Mensagem Enviada!</h1>';
        echo "<br/>";
        echo '<p class="messages">Muito Obrigado! Você é incrível!</p>';

        saveFile();
    ?>
</body>

