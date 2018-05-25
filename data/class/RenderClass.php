<?php
    class RenderClass
    {
        static function renderTemplate($templateName, $data)
        {
            $template = file_get_contents("./template/$templateName.html");
           foreach ($data as $key => $value) {
               $template = str_replace("%$key%", $value, $template);
           }
           return $template;
        }
    }