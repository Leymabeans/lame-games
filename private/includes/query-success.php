<?php
  $success_message = '';
  $error_message = '';
  if ($query) {
    $success_message = 'Information Retrieved Successfully';
  }
  else {
    $error_message = 'Trouble Retrieving Information';
  }