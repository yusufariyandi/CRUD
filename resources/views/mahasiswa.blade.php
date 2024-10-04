<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid;
        }
    </style>
</head>

<body>

    <div style="padding-top: 50px;">
        <form action="{{ route('mahasiswa.store') }}" method="post">
            @csrf
            <div>
                <input type="text" name="nama" placeholder="Nama" required>
            </div>
            <br>
            <div>
                <input type="text" name="nim" placeholder="Nim" required>
            </div>
            <br>
            <div>
                <input type="text" name="no_hp" placeholder="No hp" required>
            </div>
            <br>
            <div>
                <input type="text" name="alamat" placeholder="Alamat" required>
            </div>
            <br>
            <div>
                <button type="submit">Save</button>
            </div>
        </form>
    </div>

    <div style="padding-top: 50px; width: 50%">
        <table>
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Nim</td>
                    <td>No Hp</td>
                    <td>Alamat</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->alamat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
