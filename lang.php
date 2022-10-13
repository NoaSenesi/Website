<?php
if (isset($_COOKIE["lang_id"])) $lang_id = explode("_", $_COOKIE["lang_id"]);

else $lang_id = explode("_", str_replace(array("-"), array("_"), explode(",", strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]))[0]));

if ($lang_id[0] == "fr") $lang_id = "fr_fr";
else if ($lang_id[0] == "en"/* && ($lang[1] == "uk" || $lang_id[1] == "gb")*/) $lang_id = "en_uk";
else if ($lang_id[0] == "de") $lang_id = "de_de";
else $lang_id = "en_uk";

include "lang/" . $lang_id . ".php";
?>