<?php

return array(
    // Mail Address and Name
    'sender_email'   => 'info@cars-4-hire.co.za',
    'sender_name'    => 'Support',

    // Mail Config
    'mail_type'     => 'mail', // smtp or mail - mail is the php mail function
    'smtp_server'   => 'smtp.server.com',
    'smtp_port'     => '25',
    'smtp_user'     => 'username',
    'smtp_password' => 'xxxxxxxxxxx',


    // Mail Subjects
    'contact_form_subject' => 'New message form from your website',
    'newsletter_form_subject' => 'New message form from your website',
    'inquiry_form_subject' => 'New Car Inquiry form from your website',
    'inquiry_autoresponder_subject' => 'Thanks for your Car Inquiry',

    // Mailchimp
    'mailchimp_support' => false, // ture is activated
    'mailchimp_api_key' => 'xxxxxx-your-api-key-xxxxxx',
    'mailchimp_list_id' => 'xxx-list-id-xxx',
);