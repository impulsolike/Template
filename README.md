# Template
### by ImpulsoLike

## Requisitos
1. PHP 7.x
2. Laravel 7.x
3. Base de ImpulsoLike 2.x disponible en https://github.com/impulsolike/ImpulsoLike


## Instalación
1. Copia el directorio `Template` y su contenido dentro del directorio `app/ImpulsoLike/` de tu proyecto
2. Agrega `App\ImpulsoLike\Template\TemplateProvider::class,` en el array `providers` del archivo de configuración `config/app.php` de tu proyecto
3. Agrega `'Template' => App\ImpulsoLike\Template\TemplateFacade::class,` en el array `aliases` del archivo de configuración `config/app.php` de tu proyecto
4. Copia los archivos que estan en el directorio `config/` dentro del directorio `config/` de tu proyecto
5. Copia el directorio `views/Template` dentro del directorio `views/` de tu proyecto

## Implementación
1. Crea una ruta y retorna `Template::view('welcome');`
