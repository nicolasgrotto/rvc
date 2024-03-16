<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<div>
    <h1>
        Produtos
    </h1>
    <table class="table">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $products)
                <tr>
                @foreach($products as $product)
                    <td>{{$product}}</td>              
                @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

