<?php
  class TemplateClass
  {
    static function views()
    {   
        RenderClass::renderTemplate('header');
        RenderClass::renderTemplate('main');
        RenderClass::renderTemplate('footer');
    }
  }
