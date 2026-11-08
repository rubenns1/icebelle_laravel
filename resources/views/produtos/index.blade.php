<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icebelle System - Produtos</title>
    <!-- Um estilo simples para a tabela -->
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; background: #fff; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #6c5ce7; color: white; }
        .btn { display: inline-block; padding: 10px 15px; background: #00b894; color: white; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>

    <h1>Lista de Produtos - Icebelle System</h1>
    
    <a href="{{ route('products.create') }}" class="btn">Cadastrar Novo Produto</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>SKU</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>