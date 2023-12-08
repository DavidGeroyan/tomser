<?php
function telegrambotsendorder()
{
    // Replace 'YOUR_BOT_TOKEN' with the actual token you obtained from the BotFather
    define('BOT_TOKEN', '6461386692:AAHZhWBaLvbPb3s5fYzIf8Np5oyXkJp8t6g');

    // Replace 'YOUR_GROUP_CHAT_ID' with the actual group chat ID where you want to send updates
    define('GROUP_CHAT_ID', '-1001787750055');

    // Replace 'DATABASE_API_ENDPOINT' with the actual API endpoint of your database
    define('DATABASE_API_ENDPOINT', 'http://tomser.free.nf/home/ordersapi.php');

    // Function to fetch data from the database API
    function fetchData()
    {
        $data = file_get_contents(DATABASE_API_ENDPOINT);
        return json_decode($data, true);
    }

    // Function to send a message to the group chat
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

    // Main script
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

        $message = "New ticket order:\n$formattedData";

        // Send the message to the group chat
        sendMessage($message);

        echo `<h1 style="position:absolute">Message sent!</h1>`;
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}
