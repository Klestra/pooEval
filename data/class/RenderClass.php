<?php
    class RenderClass
    {
        static function renderTemplate($templateName)
        {
            $htmlRender = file_get_contents("./template/$templateName.html");
            echo $htmlRender;
        }
    }