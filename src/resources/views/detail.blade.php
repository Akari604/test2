<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細・変更画面</title>
</head>

<body>
    <form class="contents-detail" action="/products/{:productId}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-whole">
            <div class="form__group">
                <input type="file" class="form-control_file" name="image" id="image" value="{{ $product['image'] }}" />
            </div>
            <div div class="form__group">
                <label for="products-name">商品名</label>
                <input type="text" class="form-text" name="name" id="name" value="{{ $product['name'] }}" />
            </div>
            <div div class="form__group">
                <label for="products-price">値段</label>
                <input type="text" class="form-text" name="price" id="price">
            </div>
            <div class="form__group">
                <label for="products-season">季節</label>
                <input type="checkbox" class="form-checkbox" name="season" value="spring">
                <input type="checkbox" class="form-checkbox" name="season" value="summer">
                <input type="checkbox" class="form-checkbox" name="season" value="fall">
                <input type="checkbox" class="form-checkbox" name="season" value="winter">
            </div>
            <div class="form__group">
                <label for="description">商品説明</label>
                <textarea class="form-text" name="text" rows="6"></textarea>
            </div>
        </div>
    </form>
</body>
</html>