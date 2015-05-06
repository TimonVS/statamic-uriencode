# Statamic uri encode

This modifier for Statamic enables you to encode an uri, as some JavaScript lightbox scripts may not work without encoded uris.

## Example usage

```html
<a href="{{ image|uriencode }}">
	<img src="{{ image }}" alt="">
</a>
```
