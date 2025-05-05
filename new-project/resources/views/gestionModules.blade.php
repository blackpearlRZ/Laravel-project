<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Code Module</th>
            <th>Titre Module</th>
            <th>Masse Module</th>
        </thead>
        <tbody>
            @foreach ($modules as $module)
                <tr>
                    <td>{{ $module->codeM }}</td>
                    <td>{{ $module->titre }}</td>
                    <td>{{ $module->mh }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>