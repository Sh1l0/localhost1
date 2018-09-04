<?php
         function NewsTitle($id)
    {
           return $News = R::findOne('news', 'id = ?',[$id]);
    }
?>