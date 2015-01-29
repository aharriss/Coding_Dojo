--Question 1--

SELECT customer.first_name, customer.last_name, customer.email, address.address, city.city, address.city_id
FROM customer
JOIN address ON customer.address_id = address.address_id
JOIN city ON address.city_id = city.city_id
WHERE address.city_id = 312;

--Question 2--

SELECT film.title, film.description, film.release_year, film.rating, film.special_features, category.name
FROM film
JOIN film_category ON film.film_id = film_category.film_id
JOIN category ON film_category.film_id = category.category_id
WHERE category.name = 'Comedy';

--Question 3--

SELECT film.title, film.description, film.release_year, actor.actor_id
FROM film
JOIN film_actor ON film.film_id = film_actor.film_id
JOIN actor ON film_actor.actor_id = actor.actor_id
WHERE actor.actor_id = 5;


--Question 4--

SELECT customer.first_name, customer.last_name, customer.email, address.address
FROM customer
JOIN address ON customer.address_id = address.address_id
JOIN city ON address.city_id = city.city_id
WHERE address.city_id IN (1, 42, 312, 459);

--Question 5--

SELECT film.title, film.release_year, film.rental_rate, film.special_features
FROM film
WHERE film.rating = 'G' AND film.special_features LIKE 'behind the scenes%';

--Question 6--

SELECT actor.first_name, actor.last_name, actor.last_update, film.film_id
FROM film
JOIN film_actor ON film.film_id = film_actor.film_id
JOIN actor ON film_actor.actor_id = actor.actor_id
WHERE film.film_id=369;

--Question 7--

SELECT film.title, film.description, film.release_year, film.rating, film.special_features, category.name
FROM film
JOIN film_category ON film.film_id = film_category.film_id
JOIN category ON film_category.category_id = category.category_id
WHERE film.rental_rate='2.99' AND category.name = 'Drama';

--Question 8--

SELECT film.title, film.description, film.release_year, film.rating, film.special_features, category.name, actor.first_name, actor.last_name
FROM film
JOIN film_actor ON film_actor.film_id = film.film_id 
JOIN actor ON film_actor.actor_id = actor.actor_id
JOIN film_category ON film.film_id = film_category.film_id
JOIN category ON film_category.category_id = category.category_id
WHERE actor.first_name = 'SANDRA' AND actor.last_name = 'KILMER' AND category.name = 'action';