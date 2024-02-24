@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ public_path('img/uci.jpg') }}" class="logo" alt="UCI Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
