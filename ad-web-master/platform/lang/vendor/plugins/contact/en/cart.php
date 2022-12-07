<?php

return [
    'menu' => 'Cart',
    'edit' => 'View cart',
    'tables' => [
        'cardholders_name' => 'Cardholders Name',
        'card_number' => 'Card Number',
        'expiration' => 'Expiration',
        'cvv' => 'Cvv',
        'discound_code' => 'Discound code',
        
    ],
    'cart_information' => 'Cart information',
    'replies' => 'Replies',
    'cvv' => [
        'header' => 'Cvv',
        'title' => 'New cart from your site',
    ],
    'form' => [
        'card_number' => [
            'required' => 'Card Number is required',
        ],
        'expiration' => [
            'required' => 'Expiration is required',
            'expiration' => 'The expiration address is not valid',
        ],
        'cvv' => [
            'required' => 'Cvv is required',
        ],
    ],

    // 'contact_sent_from' => 'This contact information sent from',
    // 'sender' => 'Sender',
    // 'sender_email' => 'Email',
    // 'sender_address' => 'Address',
    // 'sender_phone' => 'Phone',
    // 'message_content' => 'Message content',
    // 'sent_from' => 'Email sent from',
    // 'form_name' => 'Name',
    // 'form_email' => 'Email',
    // 'form_address' => 'Address',
    // 'form_subject' => 'Subject',
    // 'form_phone' => 'Phone',
    // 'form_message' => 'Message',
    // 'required_field' => 'The field with (<span style="color: red">*</span>) is required.',
    // 'send_btn' => 'Send message',
    // 'new_msg_notice' => 'You have <span class="bold">:count</span> New Messages',
    // 'view_all' => 'View all',
    // 'statuses' => [
    //     'read' => 'Read',
    //     'unread' => 'Unread',
    // ],
    // 'phone' => 'Phone',
    // 'address' => 'Address',
    // 'message' => 'Message',
    // 'settings' => [
    //     'email' => [
    //         'title' => 'Contact',
    //         'description' => 'Contact email configuration',
    //         'templates' => [
    //             'notice_title' => 'Send notice to administrator',
    //             'notice_description' => 'Email template to send notice to administrator when system get new contact',
    //         ],
    //     ],
    // ],
    'no_reply' => 'No reply yet!',
    'reply' => 'Reply',
    'send' => 'Send',
    'shortcode_name' => 'Cart form',
    'shortcode_description' => 'Add a cart form',
    'shortcode_content_description' => 'Add shortcode [cart-form][/cart-form] to editor?',
    'message_sent_success' => 'Message sent successfully!',
];
