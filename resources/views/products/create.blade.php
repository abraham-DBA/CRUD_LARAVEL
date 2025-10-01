<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="product_name">Product Name</label>
    <input type="text" name="product_name" id="product_name">
    <br>
    <label for="category">Category</label>
    <select name="category" id="category">
        <option value="1">Appetizer</option>
        <option value="2">Main Course</option>
        <option value="3">Dessert</option>
    </select>
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    <br>
    <label for="product_price">Product Price</label>
    <input type="number" name="product_price" id="product_price">
    <br>
    <label for="cost_price">Cost Price</label>
    <input type="text" name="cost_price" id="cost_price">
    <br>

    <button type="submit">Create Product</button>

</form>