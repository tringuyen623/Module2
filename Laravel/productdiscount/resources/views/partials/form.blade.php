<div class="container">
    <h1>Product Discount Calculator
    </h1>
<form method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Product Description:</label>
      <input type="text" class="form-control" name="description" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">List Price:</label>
      <input type="text" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Discount Percent:</label>
        <input type="text" class="form-control" name="discount" aria-describedby="emailHelp">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
