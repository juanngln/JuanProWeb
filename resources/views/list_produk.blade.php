<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>List Produk | Praktikum 8 & 9</title>
</head>

<body>
    {{-- Praktikum 8 --}}
    <div class="mt-10 mx-20">
        <table class="table-auto border-collapse w-full border border-gray-300">
            <thead>
                <tr class="bg-pink-500 text-white">
                    <th class="border border-gray-300 px-4 py-2">No</th>
                    <th class="border border-gray-300 px-4 py-2">Nama Produk</th>
                    <th class="border border-gray-300 px-4 py-2">Deskripsi Produk</th>
                    <th class="border border-gray-300 px-4 py-2">Harga Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $desc[$index] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $harga[$index] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Praktikum 9 --}}
    <div class="m-20">
        <div class="mb-10">
            <h1 class="text-xl font-bold">Input Produk</h1>
        </div>
        <form method="POST" action="{{ route('produk.simpan') }}">
            @csrf
            <table class="table table-fixed">
                <tr>
                    <td class="">Nama :</td>
                    <td colspan="10">
                        <input type="text" class="form-control input input-bordered w-full" id="nama" name="nama">
                    </td>
                </tr>
                <tr>
                    <td class="">Deskripsi :</td>
                    <td colspan="10">
                        <textarea class="form-control textarea textarea-bordered w-full" name="deskripsi" id="deskripsi"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="">Harga :</td>
                    <td colspan="10">
                        <input type="number" class="form-control input input-bordered w-full" id="harga" name="harga">
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-wide btn-primary mt-10">Simpan</button>
        </form>
    </div>

</body>

</html>
