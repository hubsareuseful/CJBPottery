<!DOCTYPE html>
<html>
  <head>
    <title>Custom Pottery Order Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>Custom Pottery Order Form</h1>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="order.html">Order</a></li>
        </ul>
      </nav>
    </header>
    
    <main>
      <h2>Order Form</h2>
      <p>Fill out the form below to place a custom pottery order:</p>
      
      <form action="process-order.php" method="post">
        <label for="pottery-type">Type of Pottery:</label>
        <input type="text" id="pottery-type" name="pottery-type" required>
        
        <label for="pottery-shape">Shape:</label>
        <input type="text" id="pottery-shape" name="pottery-shape" required>
        
        <label for="pottery-size">Size:</label>
        <input type="text" id="pottery-size" name="pottery-size" required>
        
        <label for="pottery-color">Color:</label>
        <input type="text" id="pottery-color" name="pottery-color" required>
        
        <label for="pottery-details">Other Details:</label>
        <textarea id="pottery-details" name="pottery-details"></textarea>
        
        <input type="submit" value="Submit Order">
      </form>
    </main>
    
    <footer>
      <p>&copy; 2023 Custom Pottery Gallery. All rights reserved.</p>
    </footer>
  </body>
</html>
