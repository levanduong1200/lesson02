@extends('admin')
@section('title', 'ProductBrand List')
@section('content')

        <table class="table table-striped">
            <thead>
              <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
            @foreach($productBrands as $pb)
              <tr>
                <td>#</td>
                <td>{{ $pb->name }}</td>
                <td><a href="{{ route('product_brands.edit', $pb->id ) }}">Edit</a></td>
                <form action="{{ route('product_brands.destroy',$pb->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit">Delete</button></td>
            </form>
              </tr>
        @endforeach

            </tbody>
          </table>
    <a href="{{ route('product_brands.create') }}">Thêm Mới</a>

@endsection