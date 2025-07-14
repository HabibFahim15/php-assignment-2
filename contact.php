<?php

$contacts = [];

function addContact(array &$contacts  , string $name, string $email, $phone):void 
{
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
    // array_push($contacts, ['name' => $name, 'email' => $email, 'phone' => $phone]);
}

function displayContacts(array $contacts):void 
{
    if(empty($contacts)){
        echo "No contacts available. \n";
    }else{
        foreach($contacts as $contact){
            echo "
            Name: {$contact['name']}
            Email: {$contact['email']}
            Phone: {$contact['phone']} \n
            ";
        }
    }
}

while(true){
    echo "\nContact Management System : \n";
    echo "1. Add Contact \n2. View Contacts \n3. Exit \n";
    $choice = (int) readline("Enter your choice: ");

    if($choice === 1){
        $name = readline("Enter Name: ");
        $email = readline("Enter Email: ");
        $phone = readline("Enter Phone: ");
        addContact($contacts, $name, $email, $phone);
        echo "$name added to contacts. \n";
        echo "$email added to contacts. \n";
        echo "$phone added to contacts. \n";
    }else if($choice === 2){
        displayContacts($contacts);
    }else if($choice === 3){
        echo "Exiting... \n";
        break;
    }else{
        echo "Invalid choice. \n";
    }
}