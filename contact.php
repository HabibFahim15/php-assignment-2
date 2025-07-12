<?php

$contacts = [];

function addContact(array &$contacts  , string $name, string $email, $phone):void 
{
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
    // array_push($contacts, ['name' => $name, 'email' => $email, 'phone' => $phone]);
}

function displayContacts(array $contacts):void 
{
    foreach ($contacts as $contact) {
        echo 'Name: ' . $contact['name'] . '<br>';
        echo 'Email: ' . $contact['email'] . '<br>';
        echo 'Phone: ' . $contact['phone'] . '<br>';
    }
}
function FunctionName()  {
    return 1;
}