<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $favorite_genre = isset($_GET['ganr1']) ? 'Рок ' : '';
    $favorite_genre .= isset($_GET['ganr2']) ? 'Поп ' : '';
    $favorite_genre .= isset($_GET['ganr3']) ? 'Класика ' : '';
    $favorite_genre .= isset($_GET['ganr4']) ? 'Інше ' : '';

    $song_language = isset($_GET['mova1']) ? 'Українська ' : '';
    $song_language .= isset($_GET['mova2']) ? 'Англійська ' : '';
    $song_language .= isset($_GET['mova3']) ? 'Французька ' : '';
    $song_language .= isset($_GET['mova4']) ? 'Інше ' : '';

    $music_meaning = isset($_GET['chto1']) ? 'Хоббі ' : '';
    $music_meaning .= isset($_GET['chto2']) ? 'Відпочинок ' : '';
    $music_meaning .= isset($_GET['chto3']) ? 'Спосіб самовираження ' : '';

    $listening_time = isset($_GET['mesto1']) ? 'У дорозі ' : '';
    $listening_time .= isset($_GET['mesto2']) ? 'Вдома ' : '';
    $listening_time .= isset($_GET['mesto3']) ? 'За роботою ' : '';

    echo "<h2>Ваші відповіді:</h2>";
    echo "<p><b>Улюблений жанр музики:</b> " . trim($favorite_genre) . "</p>";
    echo "<p><b>На якій мові ви частіше всього слухаєте пісні?</b> " . trim($song_language) . "</p>";
    echo "<p><b>Що для вас музика?</b> " . trim($music_meaning) . "</p>";
    echo "<p><b>Коли частіше всього ви слухаєте музику?</b> " . trim($listening_time) . "</p>";
} else {
    echo "<h2>Будь ласка, заповніть форму опитування.</h2>";
}
?>