<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:user1pass' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'user1@example.com',
            'username' => 'user1',
            'first_name' => 'John',
            'last_name' => 'Smith',
        ),
        'user2:user2pass' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user2@example.com',
            'username' => 'user2',
            'first_name' => 'Annie',
            'last_name' => 'Wilkes',
        ),
    ),

);
