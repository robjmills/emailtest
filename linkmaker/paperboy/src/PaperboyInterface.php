<?php namespace Linkmaker\Paperboy;

interface PaperboyInterface
{
    public function send($to,$from,$content);
    public function queue();
}