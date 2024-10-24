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
        <form class="products-addition">
            <a class="products-addition__button" href="/products/register">
                + 商品を追加
            </a>
            <div class="products">
                @foreach ($products as $product)
                @if( $product[3])
                $product === [1]
                @endif
                <div class="products-card__item">
                    {{ $product->image }}
                    <div class="products-card__text">
                        <p class="products-card__name">
                            {{ $product->name }}
                        </p>
                        <p class="products-card__price">
                            {{ $product->price }}
                        </p>
                    </div>
                </div>
                @endforeach
                <div class="paginate_links">
                {{ $products->links() }}
                </div>
            </div>
                <!-- <div class="products-card__item">
                    <img class="strawberry_img" src="{{ asset('storage/strawberry.png') }}">
                    <div class="products-card__text">
                        <p class="products-card__name">
                            ストロベリー
                        </p>
                        <p class="products-card__price">
                            ￥1200
                        </p>
                    </div>
                </div>
                <div class="products-card__item">
                    <img class="orange_img" src="{{ asset('storage/orange.png') }}">
                    <div class="products-card__text">
                        <p class="products-card__name">
                            オレンジ
                        </p>
                        <p class="products-card__price">
                            ￥850
                        </p>
                    </div>
                </div>
            </div> 
            <div class="products">
                <div class="products-card__item">
                    <img class="watermelon_img" src="{{ asset('storage/watermelon.png') }}">
                    <div class="products-card__text">
                        <p class="products-card__name">
                            スイカ
                        </p>
                        <p class="products-card__price">
                            ￥700
                        </p>
                    </div>
                </div>
                <div class="products-card__item">
                    <img class="peach_img" src="{{ asset('storage/peach.png') }}">
                    <div class="products-card__text">
                        <p class="products-card__name">
                            ピーチ
                        </p>
                        <p class="products-card__price">
                            ￥1000
                        </P>
                    </div>
                </div>
                <div class="products-card__item">
                    <img class="muscat_img" src="{{ asset('storage/muscat.png') }}">
                    <div class="products-card__text">
                        <p class="products-card__name">
                            シャインマスカット
                        </p>
                        <p class="products-card__price">
                            ￥1400
                        </p>
                    </div>
                </div>
            </div>
            <div class="products">
                <div class="products-card__item">
                    <img class="pineapple_img" src="{{ asset('storage/pineapple.png') }}">
                    <div class="products-card__text">
                        <p class="products-card__name">
                            パイナップル
                        </p>
                        <p class="products-card__price">
                            ￥800
                        </p>
                    </div>
                </div>
                <div class="products-card__item">
                    <img class="grapes_img" src="{{ asset('storage/grapes.png') }}">
                    <div class="products-card__text">
                        <p class="products-card__name">
                            ブドウ
                        </p>
                        <p class="products-card__price">
                            ￥1100
                        </P>
                    </div>
                </div>
                <div class="products-card__item">
                    <img class="banana_img" src="{{ asset('storage/banana.png') }}">
                    <div class="products-card__text">
                        <p class="products-card__name">
                            バナナ
                        </p>
                        <p class="products-card__price">
                            ￥600
                        </p>
                    </div>
                </div>
            </div>
            <div class="products">
                <div class="products-card__item">
                    <img class="melon_img" src="{{ asset('storage/melon.png') }}">
                    <div class="products-card__text">
                        <p class="products-card__name">
                            メロン
                        </p>
                        <p class="products-card__price">
                            ￥900
                        </p>
                    </div>
                </div>
            </div>  -->
        </form>
    </main> 
</body>
</html>