<!DOCTYPE html>
@includeIf(Template::setting('brand'))
<html id="{{ $app }}" lang="{{ $lang }}">
<head>
@includeIf(Template::setting('metas'))
@includeIf(Template::setting('styles'))
</head>
<body>
@includeIf(Template::setting('hidden'))
<div id="{{ $id }}" class="{{ $class }}">
@includeIf(Template::component('header'))
@includeIf(Template::content($content ?? $id))
</div>
@includeIf(Template::setting('scripts'))
</body>
</html>
