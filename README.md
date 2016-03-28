# Информация

Подсветка синтаксиса при помощи библиотеки [highlight.js](https://highlightjs.org/).

## Синтаксис

```
<src lang="css" title="Блок кода CSS">
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  body:first-of-type pre::after {
    content: 'highlight: ' attr(class);
  }
  body {
    background: linear-gradient(45deg, blue, red);
  }
}

@import url('print.css');
@page:right {
 margin: 1cm 2cm 1.3cm 4cm;
}

@font-face {
  font-family: Chunkfive; src: url('Chunkfive.otf');
}

div.text,
#content,
li[lang=ru] {
  font: Tahoma, Chunkfive, sans-serif;
  background: url('hatch.png') /* wtf? */;  color: #F0F0F0 !important;
  width: 100%;
}
</src>
```

## Установка

1. Загрузите папки и файлы из `resource/upload/` (если имеется) в Вашу директорию с расширениями MediaWiki.
2. В самый низ файла `LocalSettings.php` добавьте строку `wfLoadExtension( 'HighlightJS' );`

## Ссылки

- [Сотрудничество](CONTRIBUTING.md)
- [Список изменений](CHANGELOG.md)
- [Сотрудничество](CONTRIBUTING.md)
- [Список изменений](CHANGELOG.md)
- [Сообщество MediaWiki на CYBERSPACE.Community](//cyberspace.community/#)
- [Документация MediaWiki на CYBERSPACE.Wiki](//mediawiki.cyberspace.wiki/)
