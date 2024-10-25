<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header-ttl">
            <p class="header-ttl_name">mogitate</p>
        </div>
    </header>
    <main class="main">
        <form class="search-form">
            <h2>商品一覧</h2>
            <div class="search-form__item">
                <input class="search-form__item-input" type="text" name="content">
            </div>
            <div class="search-form__button">
                <button class="search-form__item-submit" type="submit">検索</button>
            </div>
        </form>
        <form class="update-form" action="/products/{:productId}/update" method="post">
            @method('PACTH')
            @csrf
            <h4>価格順で表示</h4>
            <lavel for="products-id">
                <select class="select-form" id="products-id" name="products_id">
                    <option value="" selected hidden>価格で並べ替え</option>
                    <option value="high">高い順に表示</option>
                    <option value="low">低い順に表示</option>
                </select>
            </lavel>
        </form>
        <div class="products-addition">
            <a class="products-addition__button" href="/products/register">
                + 商品を追加
            </a>

                <div class="products">
                    <ul>
                        @foreach($products as $product)
                        <li>
                            <img src="{{ asset($product->image) }}" alt="商品画像" width="100">
                            <div class="products-card__item">
                                <p class="products-card__name">
                                    {{ $product->name }}
                                </p>
                                <p class="products-card__price">
                                    {{ $product->price }}
                                </p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            <div class="paginate_links">
            {{ $products->links() }}
            </div>
        </div>
    </main> 
</body>
</html>