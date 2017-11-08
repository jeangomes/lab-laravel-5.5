<button type="submit" class="btn btn-{{ $attributes['color'] or 'primary' }} btn-{{ $attributes['mode'] or 'circle' }} {{ $attributes['class'] or '' }}">
    {{ new HtmlString($label) }}
</button>
