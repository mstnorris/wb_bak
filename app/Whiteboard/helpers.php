<?php

function errors_for($attribute, $errors) {
    return $errors->first($attribute, '<span class="error">:message</span>');
}

function link_to_profile($text = 'Profile')
{
    return link_to_route('profile', $text);
}

function link_to_mdbid($mdbid, $text = null)
{
    return link_to_action('MdbidsController@show', $text, array($mdbid));
}

function get_fa_icon($type)
{
    switch($type)
    {
        case 'lab':
            return "fa-flask";
        break;
        case 'lec':
            return "fa-briefcase";
        break;
        case 'tut':
            return "fa-users";
        break;
        case 'pdf':
            return "fa-file-pdf-o";
        break;
        case 'ppt':
            return "fa-file-powerpoint-o";
        break;
        case 'doc':
            return "fa-file-word-o";
        break;
        case 'xls':
            return "fa-file-excel-o";
        break;
        case 'txt':
            return "fa-file-text-o";
        break;
    }
}