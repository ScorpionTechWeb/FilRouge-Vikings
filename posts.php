<?php
require('models/model.php');

$posts = getPosts();

require('views/postsView.php');
