<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Laravel</title>

</head>
    <body class="p-12">
         <table class="table-auto w-full">
            <thead class="font-bold">
                 <tr>
                    <td class="px-4 py-2"><a href="?sort=title&order={{ $order }}">Pealkiri</a></td>
                    <td class="px-4 py-2"><a href="?sort=release_date&order={{ $order }}">Aasta</td>
                    <td class="px-4 py-2"><a href="?sort=language&order={{ $order }}">Keel</td>
                    <td class="px-4 py-2"><a href="?sort=price&order={{ $order }}">Hind</td>
                    <td class="px-4 py-2"><a href="?sort=stock_saldo&order={{ $order }}">Laoseis</td>
                    <td class="px-4 py-2"><a href="?sort=pages&order={{ $order }}">Lehekülgi</td>
                    <td class="px-4 py-2"><a href="?sort=type&order={{ $order }}">Tüüp</td>
                </tr>
            </thead>
            <tbody>
            
    @foreach($books as $book)

<tr>
    <td class="border px-4 py-2">{{ $book->title }}</td>
    <td class="border px-4 py-2">{{ $book->release_date }}</td>
    <td class="border px-4 py-2">{{ $book->language }}</td>
    <td class="border px-4 py-2">{{ $book->price }}</td>
    <td class="border px-4 py-2">{{ $book->stock_saldo }}</td>
    <td class="border px-4 py-2">{{ $book->pages }}</td>
    <td class="border px-4 py-2">{{ $book->type }}</td>
</tr>

@endforeach

</tbody>
</table>

<div class="mt-4">

    {{ $books->links() }}

</div>

    </tbody>
    </table>
    </body>

</html>