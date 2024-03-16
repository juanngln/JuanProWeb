@extends('layout.list')

@section('title', 'My App')

@section('content')
<table class="table table-zebra table-auto border-collapse border border-slate-400">
    <thead>
        <tr>
            <th class="border border-slate-300 text-base">ID</th>
            <th class="border border-slate-300 text-base">Produk</th>
            <th class="border border-slate-300 text-base">Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $post)
            <tr>
                <td class="border border-slate-300">{{ $post['id'] }}</td>
                <td class="border border-slate-300">{{ $post['produk'] }}</td>
                <td class="border border-slate-300">{{ $post['harga'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection