@props(['disabled' => false, 'data' => []])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-[#00000000] block border-[#838383] p-3 pl-16 rounded-full text-white w-full']) !!}>
@foreach ($data as $item)
<option class="bg-[#130000]" value="{{$item->id}}" @if($item->id == 206) selected @endif>{{$item->name}}</option>
@endforeach
</select>
