<?php
/**
 * Configuration file for routes.
 */
return [
    // Load these routefiles in order specified and optionally mount them
    // onto a base route.
    "routeFiles" => [
        [
            // These are for internal error handling and exceptions
            "mount" => null,
            "file" => __DIR__ . "/route/internal.php",
        ],
        [
            // For debugging and development details on Anax
            "mount" => "debug",
            "file" => __DIR__ . "/route/debug.php",
        ],
        [
            "mount" => null,
            "file" => __DIR__ . "/route/comments.php",
        ],
        [
            // To read php files
            "mount" => null,
            "file" => __DIR__ . "/route/file-content.php",
        ],
        [
            // To read flat file content in Markdown from content/
            "mount" => null,
            "file" => __DIR__ . "/route/flat-file-content.php",
        ],
        [
            // Add routes from userController
            "mount" => "user",
            "file" => __DIR__ . "/route/userController.php",
        ],
        [
            // Keep this last since its a catch all
            "mount" => null,
            "file" => __DIR__ . "/route/404.php",
        ],
    ],

];
