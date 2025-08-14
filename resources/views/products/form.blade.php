<div class="mb-3">
    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label>Description:</label>
    <textarea name="description" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label>Price:</label>
    <input type="text" name="price" value="{{ old('price', $product->price ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label>Stock:</label>
    <input type="number" name="stock" value="{{ old('stock', $product->stock ?? '') }}" class="form-control">
</div>
