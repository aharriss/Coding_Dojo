SELECT customer.first_name, customer.last_name, customer.email, address.address, city.city, address.city_id
FROM customer
JOIN address ON customer.address_id = address.address_id
JOIN city ON address.city_id = city.city_id
WHERE address.city_id = 312