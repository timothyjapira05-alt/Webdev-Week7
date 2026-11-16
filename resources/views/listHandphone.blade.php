<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Processor</th>
            <th>RAM</th>
            <th>Action</th>
        </tr>
            @foreach ($handphones as $handphone)
        <tr>
            
            <td>{{ $handphone->brand }}</td>
            <td>{{ $handphone->model }}</td>
            <td>{{ $handphone->processor }}</td>
            <td>{{ $handphone->ram }}</td>
            <td>
                <form method="post" action="{{ route('delete-handphone') }}">
                    <input type="hidden" name="id" value="{{ $handphone-> id }}" />
                    <input style="background: red; color:white" type="submit" value="hapus" />
                </form>
                <a href="{{ route('edit-handphone', $handphone->id) }}">
                    <button style="background: blue; color:white">
                        Edit
                    </button>
                </a>
            </td>
        </tr>
            @endforeach
    </table>
</body>
</html>