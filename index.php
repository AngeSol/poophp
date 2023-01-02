<?php

require 'form.php';

$form = new Form(array(
    'username' => 'Roger'
));
//var_dump($form);
//die();


echo $form->input('username');
echo $form->input('password');
echo $form->submit();



$form = new Form();

echo $form->input('Soso');
echo $form->input('Soso');
echo $form->input('Soso');
echo $form->input('Soso');
echo $form->input('Soso');
echo $form->input('Soso');
echo $form->input('Soso');
echo $form->submit();