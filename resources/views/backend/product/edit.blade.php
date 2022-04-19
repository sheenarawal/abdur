@extends('layouts.backend')

@section('','')
@section('backend_content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>

        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12 mx-auto">
                <div class="card mb-4">
                    <h5 class="card-header">Form Controls</h5>
                    <div class="card-body">
                        <form action="{{route('backend.product.update',$product)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                           id="title" name="title" placeholder="Title" value="{{$product->title}}"/>
                                    @error('title')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                                <div class="col-md-6 b-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select  @error('category') is-invalid @enderror" id="category"
                                            name="category" aria-label="Default select example">
                                        <option value="">Open this select menu</option>
                                        <option value="commercial" {{$product->category=='commercial'?'selected':''}}>Commercial</option>
                                        <option value="apartments" {{$product->category=='apartments'?'selected':''}}>Apartments</option>
                                        <option value="rental" {{$product->category=='rental'?'selected':''}}>Rental</option>
                                    </select>
                                    @error('category')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tag" class="form-label">Tag</label>
                                    <input type="text" class="form-control @error('tag') is-invalid @enderror"
                                           id="tag" name="tag" placeholder="Tag"  value="{{$product->tags}}"/>
                                    @error('tag')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="strategy" class="form-label">Strategy</label>
                                    <input type="text" class="form-control @error('strategy') is-invalid @enderror"
                                           id="strategy" name="strategy" placeholder="Strategy"  value="{{$product->strategy}}"/>
                                    @error('strategy')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                               id="price" name="price" placeholder="100" aria-label="Amount (to the nearest dollar)" value="{{$product->price}}"/>
                                        <span class="input-group-text">.00</span>
                                    </div>
                                    @error('price')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                           id="address" name="address" placeholder="Address" value="{{$product->address}}"/>
                                    @error('address')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="photo" class="form-label">Photos</label>
                                    <input type="file" class="form-control @error('photo') is-invalid @enderror"
                                           id="photo" name="photo" placeholder="Photos" accept="image/*" multiple/>
                                    @error('photo')
                                    <span class="text-danger"></span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3 gallery">
                                    @foreach($media as $item)
                                    <img class="img-fluid rounded-circle me-2" src="{{asset('storage/'.$item->url)}}" style="height: 100px;width: 100px;">
                                    @endforeach
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Update Product</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->

@stop
@push('backend_css')
@endpush
@push('backend_script')
    <script>
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img class="img-fluid rounded-circle me-2" style="height: 100px;width: 100px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };

            $('#photo').on('change', function() {

                imagesPreview(this, 'div.gallery');
                $('div.gallery').html('')
            });
        });
    </script>
@endpush
