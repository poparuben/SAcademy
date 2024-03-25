USE piata_online;

INSERT INTO product_category (name_category) VALUES
('Legume cu frunze'), 
('Legume radacinoase'), 
('Legume cu tulpina'), 
('Legume cu flori');


INSERT INTO products (name, kg, price, catgory) VALUES
('Spanac', 1, 5, 1),
('Morcovi', 1, 4, 2),
('Cartofi', 1, 3, 2),
('Ceapa', 1, 2, 2),
('Ardei', 1, 6, 4);


INSERT INTO product_inventory (product_id_category, stock) VALUES
(1, 100), -- Spanac
(2, 150), -- Morcovi
(3, 200), -- Cartofi
(4, 180), -- Ceapa
(5, 120); -- Ardei




INSERT INTO client (first_name, second_name, client_mail, client_phone) VALUES
('John', 'Doe', 'john.doe@example.com', 123456789);


INSERT INTO addresses (street, number, city, zip_code) VALUES
('Strada Principală', 'Nr. 10', 'Orasul Meu', 12345);


INSERT INTO orders (client_id, order_date, id_adress, total_price, contact_phone, mail) VALUES
(1, NOW(), 1, 25, 123456789, 'john.doe@example.com');


INSERT INTO order_items (order_id, product_id) VALUES
(1, 1), -- Spanac
(1, 2), -- Morcovi
(1, 3); -- Cartofi




