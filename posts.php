<?php
require('model.php');

$posts = getPosts();

require('views/postsView.php');
