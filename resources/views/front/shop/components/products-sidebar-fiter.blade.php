<form action="{{ request()->segment(2) == 'product' ? 'shop' : '' }}">
    <div class="filter-widget">
        <h4 class="fw-title">Bộ Sưu Tập</h4>
        <ul class="filter-catagories">
            @foreach ($categories as $category)
                <li><a href="shop/category/{{ $category->name }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Thương Hiệu</h4>
        <div class="fw-brand-check">
            <div class="bc-item">
                <label for="bc-calvin">
                    Calvin Klein
                    <input type="checkbox" id="bc-calvin">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="bc-item">
                <label for="bc-diesei">
                    Diesei
                    <input type="checkbox" id="bc-diesei">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="bc-item">
                <label for="bc-polo">
                    Polo
                    <input type="checkbox" id="bc-polo">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="bc-item">
                <label for="bc-tommy hilfiger">
                    Tommy Hilfiger
                    <input type="checkbox" id="bc-tommy hilfiger">
                    <span class="checkmark"></span>
                </label>
            </div>
            {{-- @foreach ($brands as $brand)
                <div class="bc-item">
                    <label for="bc-{{ $brand->id }}">
                        {$brand->name}
                        <input type="checkbox" {{ (request('brand')[$brand->id] ?? '') == 'on' ? 'checked' : '' }}
                            id="bc-{{ $brand->id }}" name="brand[{{ brand->id }}]"
                            onchange="this.form.submit();">
                        <span class="checkmark"></span>
                    </label>
                </div>
            @endforeach --}}

        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Giá</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount" name="price_min">
                    <input type="text" id="maxamount" name="price_max">
                </div>
            </div>
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content",
                data-min="10"data-max="999" data-min-value="{{ str_replace('₫', '', request('price_min')) }}"
                data-max-value="{{ str_replace('₫', '', request('price_max')) }}">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>
        <button type="Submit" class="filter-btn">Lọc</button>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Màu</h4>
        <div class="fw-color-choose">
            <div class="cs-item">
                <input type="radio" id="cs-black" name="color" value="black" onchange="this.form.submit()"
                    {{ request('color') == 'black' ? 'checked' : '' }}>

                <label class="cs-black {{ request('color') == 'black' ? 'font-weight-bold' : '' }} "
                    for="cs-black">Đen</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-violet"name="color" value="violet" onchange="this.form.submit()"
                    {{ request('color') == 'violet' ? 'checked' : '' }}>
                <label class="cs-violet {{ request('color') == 'violet' ? 'font-weight-bold' : '' }} "
                    for="cs-violet">Tím</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-blue"name="color" value="blue" onchange="this.form.submit()"
                    {{ request('color') == 'blue' ? 'checked' : '' }}>
                <label class="cs-blue {{ request('color') == 'blue' ? 'font-weight-bold' : '' }} "
                    for="cs-blue">Xanh</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-yellow"name="color" value="yellow" onchange="this.form.submit()"
                    {{ request('color') == 'yellow' ? 'checked' : '' }}>
                <label class="cs-yellow {{ request('color') == 'yellow' ? 'font-weight-bold' : '' }} "
                    for="cs-yellow">Vàng</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-red"name="color" value="red" onchange="this.form.submit()"
                    {{ request('color') == 'red' ? 'checked' : '' }}>
                <label class="cs-red {{ request('color') == 'red' ? 'font-weight-bold' : '' }} "
                    for="cs-red">Đỏ</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-green"name="color" value="green" onchange="this.form.submit()"
                    {{ request('color') == 'green' ? 'checked' : '' }}>
                <label class="cs-green {{ request('color') == 'green' ? 'font-weight-bold' : '' }} "
                    for="cs-green">Xanh lá</label>
            </div>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Size</h4>
        <div class="fw-size-choose">
            <div class="sc-item">
                <input type="radio" id="s-size">
                <label for="s-size">s</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="m-size">
                <label for="m-size">m</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="l-size">
                <label for="l-size">l</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="xs-size">
                <label for="xs-size">xs</label>
            </div>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Tags</h4>
        <div class="fw-tags">
            <a href="#">ÁO</a>
            <a href="#">QUẦN</a>
            <a href="#">QUẦN ÁO THỂ THAO</a>
            <a href="#">BALO - TÚI XÁCH</a>
            <a href="#">GIÀY DÉP</a>
            <a href="#">SET ÁO VEST</a>
            <a href="#">SET ÁO QUẦN</a>
        </div>
    </div>
</form>
