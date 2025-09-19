@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
{{-- <img src="{{asset('ica_logo.PNG')}}" class="logo" alt="Laravel Logo">
 --}}
 <h1 class="logo">Igreja a Caminho do Alvo</h1>
@else
{!! $slot !!}
@endif
</a>
</td>
</tr>
