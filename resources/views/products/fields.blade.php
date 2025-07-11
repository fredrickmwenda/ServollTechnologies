<div class="row gx-10 mb-5">
    <div class="col-lg-6">

        {{ Form::label('name', __('messages.product.name').':', ['class' => 'form-label required mb-3']) }}

        <div class="input-group mb-5">
            {{ Form::text('name',null,['class' => 'form-control ', 'placeholder' => __('messages.product.name'), 'required','onkeypress'=>"return blockSpecialChar(event)"]) }}
        </div>

    </div>
    <div class="col-lg-6">
        {{ Form::label('code', __('messages.product.code').':', ['class' => 'form-label required mb-3']) }}
        <span data-bs-toggle="tooltip"
            data-placement="top"
            data-bs-original-title="{{ __('messages.flash.click_refresh_icon_generate_product_code') }}">
            <i class="fas fa-question-circle ml-1"></i>
        </span>
        <div class="input-group mb-5">
            {{ Form::text('code', null, ['class' => 'form-control ', 'placeholder' => __('messages.product.code'), 'required', 'id' => 'code', 'maxlength' => 6,'onkeypress'=>"return blockSpecialChar(event)",]) }}
            <a class="input-group-text border-0" id="autoCode" href="javascript:void(0)" data-bs-toggle="tooltip"
                data-placement="right" title="Generate Code">
                <i class="fas fa-sync-alt fs-4"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('category', __('messages.product.category').':', ['class' => 'form-label required mb-3']) }}
            {{ Form::select('category_id', $categories ,null, ['id'=>'categoryId', 'class' => 'form-select io-select2 ', 'placeholder' => __('messages.product.category'), 'required', 'data-control' => 'select2']) }}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('unit_price', __('messages.product.unit_price').':', ['class' => 'form-label required mb-3']) }}
            {{ Form::number('unit_price',null,['id'=>'unitPriceId','class' => 'form-control ', 'placeholder' => __('messages.product.unit_price'),'min'=>'0', 'step'=>".01", 'oninput'=>"validity.valid||(value=value.replace(/\D+/g, '.'))",'required']) }}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="mb-5">
            {{ Form::label('description', __('messages.product.description').':', ['class' => 'form-label mb-3']) }}
            {{ Form::textarea('description',null,['class' => 'form-control ', 'placeholder' => __('messages.product.description'),'rows' => '5']) }}
        </div>
    </div>
    <div class="col-lg-3 mb-7">
        <div class="mb-3" io-image-input="true">
            <label for="exampleInputImage" class="label text-secondary">{{ __('messages.product.image').':' }}</label>

            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="productImage" class="file-upload mb-0">
                        <i class="ri-folder-image-line bg-primary bg-opacity-10 p-2 rounded-1 text-primary"></i>
                        <span class="d-block text-body fs-14">Drag and drop an image or <span class="text-primary text-decoration-underline">Browse</span></span>
                    </label>
                    <input type="file" id="productImage" name="image" class="image-upload d-none" accept="image/*">
                </div>
            </div>

            <!-- <div class="d-block">
                <div class="image-picker">
                    <div class="image previewImage" id="previewImage"
                    {{ $styleCss }}="background-image: url('{{ !empty($product->product_image) ?
                        $product->product_image : asset('images/default-product.jpg') }}')">
                </div>
                <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                      title="Change image">
                    <label>
                        <i class="fa-solid fa-pen" id="productImage"></i>
                            <input type="file" id="productImage" name="image" class="image-upload d-none"
                                   accept="image/*"/>
                                        <input type="hidden" name="image_remove">
                    </label>
                </span>
            </div> -->
        </div>
        <div class="form-text">{{ __('messages.flash.allowed_file_types_png_jpg_jpeg') }}</div>
    </div>
</div>
</div>
<div class="float-end p-4">
    {{ Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-3']) }}
    <a href="{{ route('products.index') }}" type="reset"
        class="btn btn-secondary btn-active-light-primary">{{__('messages.common.discard')}}</a>
</div>