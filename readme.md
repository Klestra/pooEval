# Explication 

## Tout d'abord j'ai crée un index, deux classes ainsi que 3 templates. Dans mon index j'appel ma classe "TemplateClass" qui gère le fait d'afficher mes templates via la méthode "views". 

## Dans cette méthode j'appel ma classe "RenderClass" avec la méthode qui lui est associé "renderTemplate". Celle-ci permet d'aller chercher les templates (notamement via la variable "TemplateName") et leur contenu (ainsi que les clés qui leur sont assoscié) pour ensuite pouvoir transmettre ces informations à "TemplateClass" qui se chargera de les afficher sur le site internet.