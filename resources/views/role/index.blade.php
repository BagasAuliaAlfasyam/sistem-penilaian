<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>mweheheh</title>
</head>
<body>
  {{-- @if (auth()->user()->can('create role'))
  <button>Tambah</button>
  @endif --}}
  <button>Tambah</button>
@can('create role')
@endcan
</body>
</html>