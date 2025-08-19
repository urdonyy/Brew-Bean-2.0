--- DATABASE MYSQLI ---
CREATE DATABASE brew_bean;

--- TABLE QUERY ---

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id VARCHAR(100),
    product_name VARCHAR(100),
    price DECIMAL(10,2)
);

INSERT INTO products (product_id, product_name, price, image_filename) VALUES
('Hot Coffee', 'Caramel Macchiato', 150, 'caramel_macchiato.jpg'),
('Hot Coffee', 'Espresso', 120, 'espresso.jpg'),
('Hot Coffee', 'Cappucino', 180, 'cappucino.jpg'),
('Hot Coffee', 'Caffe Misto', 120, 'caffe_misto.jpg'),

('Cold Coffee', 'Cold Brew', 120, 'cold_brew.jpg'),
('Cold Coffee', 'Chocolate Cream', 170, 'chocolate_cream.jpg'),
('Cold Coffee', 'Raspberry Cream ', 200, 'raspberry_cream.jpg'),
('Cold Coffee', 'Salted Caramel Macchiato', 150, 'salted_caramel_macchiato.jpg'),

('Non-Coffee', 'Lemon Tea', 150, 'lemon_tea.jpg'),
('Non-Coffee', 'Ice Tea', 150, 'ice_tea.jpg'),
('Non-Coffee', 'Chai Latte', 180, 'chai_latte.jpg'),
('Non-Coffee', 'Matcha Latte', 200, 'matcha_latte.jpg');

