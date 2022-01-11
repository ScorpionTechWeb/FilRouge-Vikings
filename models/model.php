<?php

// On fait appelle au fichier db.php qui sert à se connecter à la base de données sql
include('./includes/db.php');

function getPosts()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, picture_article, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

    return $req;
}

function getPost($postId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, picture_article, title, content  DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function getComments($postId)
{
    $db = dbConnect();
    $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;
}

function getActors()
{
    $db = dbConnect();
    $req = $db->query('SELECT * FROM actors ORDER BY rating_actor DESC LIMIT 4 ');

    return $req;
}