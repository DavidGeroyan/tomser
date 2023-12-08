<?php
function telegrambotsend()
{
    
    define('BOT_TOKEN', '6461386692:AAHZhWBaLvbPb3s5fYzIf8Np5oyXkJp8t6g');

    
    define('GROUP_CHAT_ID', '-1001787750055');

  
    define('DATABASE_API_ENDPOINT', 'http://tomser.free.nf/home/contactusapi.php');

    
    function fetchData()
    {
        $data = file_get_contents(DATABASE_API_ENDPOINT);
        return json_decode($data, true);
    }

    
    function sendMessage($message)
    {
        $url = 'https://api.telegram.org/bot' . BOT_TOKEN . '/sendMessage';
        $params = [
            'chat_id' => GROUP_CHAT_ID,
            'text' => $message,
        ];

        $query = http_build_query($params);
        $url .= '?' . $query;

        file_get_contents($url);
    }

    
    try {
        $latestData = fetchData();

        // Process the data as needed
        $formattedData = '';
        $numItems = count($latestData);
        $i = 0;
        foreach ($latestData as $key => $value) {
            $i++;
            if ($i === $numItems) {
                foreach ($value as $key2 => $value2) {
                    $formattedData .= "$key2: $value2\n";
                }
            }
        }

        $message = "New message from contact:\n$formattedData";

       
        sendMessage($message);

        echo `<h1 style="position:absolute">Message sent!</h1>`;
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}
