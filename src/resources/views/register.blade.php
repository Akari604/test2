<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>
<header class="header">
        <div class="header-ttl">
            <p class="header-ttl_name">mogitate</p>
        </div>
    </header>
    <main class="main">
        <div class="main-title">
            <h2>商品一覧</h2>
        </div>
        <form class="contents-detail" action="/products" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-whole">
                <div div class="form__group">
                    <div class="form__group-title">
                        <label for="products-name">商品名</label>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" class="form-text" name="name" id="name" placeholder="商品名を入力" value="{{ old('name') }}" />
                        </div>
                        <div class="form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div div class="form__group">
                    <div class="form__group-title">
                        <label for="products-price">値段</label>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" class="form-text" name="price" id="price" placeholder="値段を入力" value="{{ old('price') }}" />
                        </div>
                        <div class="form__error">
                            @error('price')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label for="products-price">商品画像</label>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--image">
                            <input type="file" class="form-control_file" name="image" id="image" value="{{ old('image') }}" />
                        </div>
                        <div class="form__error">
                            @error('image')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label for="products-season">季節</label>
                        <span class="form__label--required">必須</span>
                        <span class="form__label--prefix">複数選択可</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--checkbox">
                            <input type="checkbox" class="form-checkbox" name="season" value="spring">春
                            <input type="checkbox" class="form-checkbox" name="season" value="summer">夏
                            <input type="checkbox" class="form-checkbox" name="season" value="fall">秋
                            <input type="checkbox" class="form-checkbox" name="season" value="winter">冬
                        </div>
                        <div class="form__error">
                            @error('season')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label for="description">商品説明</label>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea class="form-text" name="description" rows="6" placeholder="商品の説明を入力" value="{{ old('description') }}"></textarea>
                        </div>
                        <div class="form__error">
                            @error('description')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <a class="products-addition__button" href="/products">戻る</a>
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </div>
        </form>
    </main>    
</body>
</html>