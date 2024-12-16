<?php

// Idioma por defecto
$defaultLanguage = 'es'; // Español

// Función para obtener el idioma preferido desde la cabecera 'Accept-Language'
function getPreferredLanguage($availableLanguages, $defaultLanguage) {
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        // Obtenemos la cabecera 'Accept-Language'
        $acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

        // Dividimos la cabecera en una lista de idiomas (por prioridad)
        $languages = explode(',', $acceptLanguage);

        foreach ($languages as $lang) {
            // Obtenemos el código de idioma (primeros dos caracteres)
            $langCode = substr($lang, 0, 2);

            // Si el idioma está disponible, lo usamos
            if (in_array($langCode, $availableLanguages)) {
                return $langCode;
            }
        }
    }

    // Si no encontramos un idioma válido, devolvemos el idioma por defecto
    return $defaultLanguage;
}

// Lista de idiomas disponibles en la página
$availableLanguages = ['es', 'en', 'fr']; // Español, Inglés, Francés

// Obtenemos el idioma preferido o el idioma por defecto
$language = getPreferredLanguage($availableLanguages, $defaultLanguage);

// Contenidos en diferentes idiomas
$contents = [
    'es' => [
        'title' => 'Cambiar el idioma de la página',
        'content' => 'Esta página está en Español.'
    ],
    'en' => [
        'title' => 'Change the language of the page',
        'content' => 'This page is in English.'
    ],
    'fr' => [
        'title' => 'Changer la langue de la page',
        'content' => 'Cette page est en Français.'
    ]
];

// Seleccionamos el contenido basado en el idioma detectado
$title = $contents[$language]['title'];
$content = $contents[$language]['content'];

?>

<!doctype html>
<html lang="<?= $language ?>">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($title) ?></title>
</head>
<body>
<h1><?= htmlspecialchars($title) ?></h1>
<p><?= htmlspecialchars($content) ?></p>

<ul>
    <li><a href="?setLanguage=es">Español</a></li>
    <li><a href="?setLanguage=en">Inglés</a></li>
    <li><a href="?setLanguage=fr">Francés</a></li>
</ul>
</body>
</html>
