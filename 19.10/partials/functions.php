<?php 
function naglowek(string $content, int $level)
{
    return "<h$level>$content</h$level";
}