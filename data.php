INSERT INTO addresses (street, city, state, postal_code, country, created_at, updated_at) 
VALUES 
  ('123 Main St', 'New York', 'NY', '10001', 'USA', NOW(), NOW()),
  ('456 Elm St', 'Los Angeles', 'CA', '90001', 'USA', NOW(), NOW()),
  ('789 Oak St', 'Chicago', 'IL', '60601', 'USA', NOW(), NOW()),
  ('10 Downing Street', 'London', NULL, 'SW1A 2AA', 'UK', NOW(), NOW()),
  ('2 Chome-3-1 Aomi', 'Tokyo', 'Koto City', '135-0064', 'Japan', NOW(), NOW()),
  ('Champs-Élysées', 'Paris', NULL, '75008', 'France', NOW(), NOW());


  INSERT INTO categories (name, description, image, created_at, updated_at) 
VALUES 
  ('Electronics', 'Electronic devices and gadgets', 'electronics.jpg', NOW(), NOW()),
  ('Clothing', 'Clothes and fashion accessories', 'clothing.jpg', NOW(), NOW()),
  ('Home Decor', 'Home decorations and furnishings', 'homedecor.jpg', NOW(), NOW()),
  ('Books', 'Books and literature', 'books.jpg', NOW(), NOW()),
  ('Sports', 'Sports equipment and gear', 'sports.jpg', NOW(), NOW()),
  ('Beauty', 'Beauty products and cosmetics', 'beauty.jpg', NOW(), NOW());



  -- Insert fake data for roles
INSERT INTO roles (name, created_at, updated_at) VALUES
('Commercial', NOW(), NOW()),
('Provider', NOW(), NOW());
