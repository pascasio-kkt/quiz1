<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Create Inventory Item</title>

</head>

<body>

    <h1>Create a New Inventory Item</h1>

    <!-- Display validation errors if any -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Inventory creation form -->
    <form method="POST" action="https://super-space-carnival-r4pgx9j75gx93p456-8000.app.github.dev/inventory">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="{{ old('quantity') }}" required>

        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ old('price') }}" required>

        <button type="submit">Create Item</button>
    </form>

    <!-- Back to Inventory link -->
    <a href="{{ route('inventory.index') }}">Back to Inventory</a>

</body>

</html>
