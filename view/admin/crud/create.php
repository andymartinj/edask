<?php

namespace Anax\View;

/**
 * View to create a new book.
 */
// Show all incoming variables/functions
//var_dump(get_defined_functions());
//echo showEnvironment(get_defined_vars());

if ($di->get("session")->get("user")["role"] !== "admin") {
    $di->get("response")->redirect("404");
}

// Gather incoming variables and use default values if not set
$items = isset($items) ? $items : null;

// Create urls for navigation
$urlToViewItems = url("admin");



?><h1>Create a user</h1>

<?= $form ?>

<p>
    <a href="<?= $urlToViewItems ?>">View all</a>
</p>
