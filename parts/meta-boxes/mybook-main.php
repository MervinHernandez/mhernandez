<?php
/*
title: Main Book Content
post_type: mybook
meta_box: false
*/

/* Book Author Field */
  piklist('field', array(
  'type' => 'text'
  ,'field' => 'mybook_author'
  ,'template' => 'field' // format the field without a label
  ,'attributes' => array(
    'class' => 'large-text'
    ,'placeholder' => 'Book Author'
  )
));
/* Editor Box */
piklist('field', array(
  'type' => 'editor',
  'field' => 'content',
  'label' => 'Post Content'
));