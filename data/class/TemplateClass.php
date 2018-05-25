<?php
  class TemplateClass
  {
    static function views($templateName)
    {   
        $htmlRender = "";
        foreach ($templateName['template'] as $value) {
          $htmlRender .= RenderClass::renderTemplate($value, $templateName['data']);
        }
        echo $htmlRender;
    }
  }


