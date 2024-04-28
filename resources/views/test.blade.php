@extends('component.app')

@section('content')

<form id="searchForm">
  <input type="text" id="searchInput" placeholder="Search products...">
</form>

<div id="productList">
  </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('#searchInput').on('keyup', function(e) {
    e.preventDefault(); // Prevent form submission

    var query = $(this).val().trim(); // Get the trimmed search term

    if (query) { // Validate if a search term is entered
      $.ajax({
        url: '{{ route('test') }}', // Ensure route name matches controller method
        type: 'GET',
        data: { query: query },
        success: function(response) {
          updateProductList(response); // Use a separate function to handle successful search results
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error searching for products:", textStatus, errorThrown);
          // Display an error message to the user (optional)
        }
      });
    } else {
      // Handle empty search input (optional: display a message)
      $('#productList').empty(); // Clear product list if search term is empty
    }
  });
});

function updateProductList(productData) {
  // Assuming 'productData' is an array of product objects
  var productListElement = $('#productList');
  productListElement.empty(); // Clear existing content

  // Iterate through productData and populate the template (replace with your actual template logic)
  for (var i = 0; i < productData.length; i++) {
    var product = productData[i];
    var productItem = $('<div class="product-item">...</div>'); // Replace with your product item template
    productListElement.append(productItem);

    // Fill product details within the template (assuming properties exist)
    productItem.find('.product-name').text(product.name);
    productItem.find('.product-price').text('$' + product.price);
    // ... and so on for other product attributes
  }
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
@endsection
