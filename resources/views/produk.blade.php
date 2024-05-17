<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="mt-10">
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
</body>
</html>